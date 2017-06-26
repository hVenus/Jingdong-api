<?php
/**
 * FBP仓储API.
 */

namespace hVenus\JingdongAPI\API;


trait FBP
{

    /**
     * 普通 基础	jingdong.store.queryStoreHouseRentlist	1.    查询商家已租用仓库列表
     * @param $params
     * @return mixed
     */
    public function FBPQueryStoreHouseRentList($params) {
        return $this->call_jd_function('jingdong.store.queryStoreHouseRentlist', $params);
    }

    /**
     * 普通 基础	jingdong.store.createStockInBill	2.    创建入库单
     * @param $params
     * @return mixed
     */
    public function FBPCreateStockInBill($params) {
        return $this->call_jd_function('jingdong.store.createStockInBill', $params);
    }

    /**
     * 普通 基础	jingdong.store.queryStockInBill	3.    检索入库单
     * @param $params
     * @return mixed
     */
    public function FBPQueryStockInBill($params) {
        return $this->call_jd_function('jingdong.store.queryStockInBill', $params);
    }

    /**
     * 普通 基础	jingdong.store.deleteStockInBill	4.    删除入库单
     * @param $params
     * @return mixed
     */
    public function FBPDeleteStockInBill($params) {
        return $this->call_jd_function('jingdong.store.deleteStockInBill', $params);
    }

    /**
     * 普通 基础	jingdong.store.createStockOutBill	5.    创建退库单
     * @param $params
     * @return mixed
     */
    public function FBPCreateStockOutBill($params) {
        return $this->call_jd_function('jingdong.store.createStockOutBill', $params);
    }

    /**
     * 普通 基础	jingdong.store.queryStockOutBill	6.    检索退库单
     * @param $params
     * @return mixed
     */
    public function FBPQueryStockOutBill($params) {
        return $this->call_jd_function('jingdong.store.queryStockOutBill', $params);
    }
}