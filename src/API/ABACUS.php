<?php
/**
 * 金算盘API.
 */

namespace hVenus\JingdongAPI\API;


trait ABACUS
{

    /**
     * 普通 基础	jingdong.pop.invoice.own.apply	1.    自开票申请接口
     * @param $params
     * @return mixed
     */
    public function AbacusOwnApplyInvoice($params) {
        return $this->call_jd_function('jingdong.pop.invoice.own.apply', $params);
    }
}