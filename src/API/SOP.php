<?php
/**
 * SOP仓储API.
 */
namespace hVenus\JingdongAPI\API;


trait SOP
{

    /**
     * 普通 基础	jingdong.store.countPartitionWhByIdAndStatus	1.    查询仓库数量
     * @param $params
     * @return mixed
     */
    public function SOPCountPartitionWarehouseByIDAndStatus($params) {
        return $this->call_jd_function('jingdong.store.countPartitionWhByIdAndStatus', $params);
    }

    /**
     * 普通 基础	jingdong.store.getPartitionWarehouseType	2.    查询仓库类型
     * @param $params
     * @return mixed
     */
    public function SOPGetPartitionWarehouseType($params) {
        return $this->call_jd_function('jingdong.store.getPartitionWarehouseType', $params);
    }

    /**
     * 普通 基础	jingdong.store.findPartitionWhByIdAndStatus	3.    查询仓库信息
     * @param $params
     * @return mixed
     */
    public function SOPFindPartitionWarehouseByIDAndStatus($params) {
        return $this->call_jd_function('jingdong.store.findPartitionWhByIdAndStatus', $params);
    }
}