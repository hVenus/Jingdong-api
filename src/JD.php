<?php
/**
 * 京东接口包装.
 */

namespace hVenus\JingdongAPI;

use hVenus\JingdongAPI\API\ACCOUNT;
use hVenus\JingdongAPI\API\ADDRESS;
use hVenus\JingdongAPI\API\CATEGORY;
use hVenus\JingdongAPI\API\DSP;
use hVenus\JingdongAPI\API\ECLP;
use hVenus\JingdongAPI\API\EXPRESS;
use hVenus\JingdongAPI\API\Helper;
use hVenus\JingdongAPI\API\ORDER;
use hVenus\JingdongAPI\API\SHOP;
use hVenus\JingdongAPI\Core\BaseClass;

class JD extends BaseClass
{
    use Helper, ECLP, EXPRESS, ADDRESS, CATEGORY, DSP, SHOP, ORDER, ACCOUNT;

    /**
     * 获取各接口的具体地址
     * @param $method
     * @return mixed
     */
    private function getMethod($method) {
        $method = str_replace('.', '_', $method);
        if (mb_substr($method, 0, 3) == '360') {
            $method = '_'.$method;
        }
        return $this->$method();
    }

    /**
     * 获取系统参数
     * @param $method
     * @return array
     */
    private function getParams($method) {
        $p = [
            "method" => $method,
            'access_token' => $this->params['access_token'],
            'app_key' => $this->config['JD']['AppKey'],
            'timestamp' => date('Y-m-dH:i:s'),
            'format' => $this->config['JD']['Format'],
            'v' => $this->config['JD']['Version']
        ];
        return $p;
    }

    /**
     * 调用京东接口
     * @param $method 接口地址
     * @param $param 参数
     * @return array|\GuzzleHttp\Stream\StreamInterface|mixed|null|string
     */
    private function call_jd_function($method, $param){
        // 获取系统参数
        $p = $this->getParams($method);
        // 签名
        $sign = $this->signit($p, $this->config['JD']['AppSecret']);
        // 签名加入参数
        $p['sign'] = $sign;
        // 获取应用参数
        if (is_array($param) && count($param)>0) {
            $p['360buy_param_json'] = json_encode($param);
        } else {
            // 无参数需要构造空字段
            $p['360buy_param_json'] = "{}";
        }

        // 获取接口数据
        $result = $this->HttpGet($this->config['JD']['Url'], $this->config['JD']['Uri'], $p);

        return $result;
    }

    /**
     * 用于直接调用
     * @param $method
     * @param $param
     * @return array|\GuzzleHttp\Stream\StreamInterface|mixed|null|string
     */
    public function Call($method, $param) {
        return $this->call_jd_function($method, $param);
    }

    /**
     * 刷新京东的授权Token
     * @param $param
     * @return bool|mixed
     */
    public function RefreshToken($param) {
        $config = [
            'client_id' => $param['AppKey'],
            'client_secret' => $param['AppSecret'],
            'grant_type' => 'refresh_token',
            'refresh_token' => $param['refresh_token'],
            'state' => $param['state'],
            'scope' => 'read',
        ];
        $result = $this->HttpPost('https://oauth.jd.com', 'oauth/token', $config);

        if ($result != '') {
            $data = json_decode($result);
            return $data;
        }
        return false;
    }

}