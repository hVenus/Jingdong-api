<?php
namespace hVenus\JingdongAPI\API;

trait Helper
{
    /**
     * 签名
     * 算法：
     * 1,所有请求参数按照字母先后顺序排列
     * 2,把所有参数名和参数值进行拼接
     * 3,把appSecret夹在字符串的两端
     * 4,使用MD5进行加密，再转化成大写
     * @param $param
     * @param $secret
     * @return string
     */
    public function signit($param, $secret) {
        $result = '';
        if (count($param)>0 && strlen($secret)>0) {
            ksort($param);                                  // 1
            $string = '';
            foreach ($param as $key => $val) {
                $string .= $key.$val;                       // 2
            }
            $string = $secret . $string . $secret;          // 3
            $md5 = md5($string);                            // 4
            $result = strtoupper($md5);                     // 4
        }
        return $result;
    }
}