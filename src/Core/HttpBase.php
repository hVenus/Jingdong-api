<?php
/**
 * http method.
 */

namespace hVenus\JingdongAPI\Core;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

trait HttpBase
{
    /**
     * http get method
     * @param array $query http params
     * @param array $header http header params
     * @return array|\GuzzleHttp\Stream\StreamInterface|mixed|null|string
     */
    public function HttpGet($url, $uri, $query=array(), $header=array()) {
        try {

            $client =  new Client(['base_uri' => $url]);

            $header['charset'] = 'UTF-8';
            $header['Content-Type'] = 'application/x-www-form-urlencoded';

            $res = $client->get(
                $uri,
                array(
                    'query' => $query,
                    'headers' => $header,
                )
            );
            $body = $res->getBody();
            $contents = $body->getContents();
            $data = $contents;
            $code = $res->getStatusCode();
            return $data;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * http post method
     * @param array $query http params
     * @param array $header https params
     * @return array|\GuzzleHttp\Stream\StreamInterface|null|\SimpleXMLElement|string
     */
    public function HttpPost($url, $uri, $query=array(), $header=array()) {
        try {
            $client =  new Client(['base_uri' => $url]);

            // 数据需要以form_params提交，不然传过去时会附加多余的数据。导致签名验证失败。
            $response = $client->post(
                $uri,
                array(
                    'form_params' => $query,
                    'headers' => $header,
                )
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody();
                $contents = $body->getContents();
                $data = $contents;
                return $data;
            }
            return $statusCode;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}