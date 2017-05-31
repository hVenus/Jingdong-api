<?php
/**
 * 配送API.
 */

namespace hVenus\JingdongAPI\API;


trait DELIVERY
{


    /**
     * 普通 基础	360buy.delivery.logistics.get	1.    商家获取物流公司
     * @param $params
     * @return mixed
     */
    public function DeliveryGetLogisticsCompany($params) {
        return $this->call_jd_function('360buy.delivery.logistics.get', $params);
    }

    /**
     * 普通 基础	360buy.get.vender.all.delivery.company	2.    获取商家的所有物流公司
     * @param $params
     * @return mixed
     */
    public function DeliveryGetAllLogisticsCompanies($params) {
        return $this->call_jd_function('360buy.get.vender.all.delivery.company', $params);
    }

    /**
     * 普通 基础	360buy.add.vender.delivery.company	3.    添加物流公司
     * @param $params
     * @return mixed
     */
    public function DeliveryAddLogisticsCompany($params) {
        return $this->call_jd_function('360buy.add.vender.delivery.company', $params);
    }

    /**
     * 普通 基础	360buy.delete.vender.delivery.company	4.    删除商家的物流公司
     * @param $params
     * @return mixed
     */
    public function DeliveryDeleteLogisticsCompany($params) {
        return $this->call_jd_function('360buy.delete.vender.delivery.company', $params);
    }

}