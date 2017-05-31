<?php
/**
 * 二维码API.
 */

namespace hVenus\JingdongAPI\API;


trait QRCODE
{

    /**
     * 普通 基础	jingdong.ma.code.list	1.    查询二维码列表
     * @param $params
     * @return mixed
     */
    public function QRCodeSearchCode($params) {
        return $this->call_jd_function('jingdong.ma.code.list', $params);
    }
}