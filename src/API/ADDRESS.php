<?php
/**
 * 京东地址库API.
 */

namespace hVenus\JingdongAPI\API;


trait ADDRESS
{
    /**
     * 普通 基础    jingdong.areas.province.get    获取省级地址列表——新省级地址接口
     * @param $params
     * @return mixed
     */
    public function AddressGetProvince($params) {
        return $this->call_jd_function('jingdong.areas.province.get', $params);
    }

    /**
     * 普通 基础    jingdong.areas.city.get   获取市级信息列表——新市级地址接口
     * @param $params
     * @return mixed
     */
    public function AddressGetCity($params) {
        return $this->call_jd_function('jingdong.areas.city.get', $params);
    }

    /**
     * 普通 基础    jingdong.areas.county.get    获取区县级信息列表——新区县级地址接口
     * @param $params
     * @return mixed
     */
    public function AddressGetCounty($params) {
        return $this->call_jd_function('jingdong.areas.county.get', $params);
    }

    /**
     * 普通 基础    jingdong.areas.town.get        获取乡镇级信息列表——新乡镇级地址接口
     * @param $params
     * @return mixed
     */
    public function AddressGetTown($params) {
        return $this->call_jd_function('jingdong.areas.town.get', $params);
    }

    /**
     * 普通 基础    jingdong.zxj.cod.get        中小件COD
     * @param $params
     * @return mixed
     */
    public function AddressGetCOD($params) {
        return $this->call_jd_function('jingdong.zxj.cod.get', $params);
    }

}