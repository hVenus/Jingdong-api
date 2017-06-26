<?php
/**
 * 服务市场API.
 */
namespace hVenus\JingdongAPI\API;


trait SERVICE
{

    /**
     * 普通 基础	jingdong.vas.subscribe.get	1.    订购关系查询（根据购买用户名和收费项目代码获取订购关系时长）
     * @param $params
     * @return mixed
     */
    public function ServiceSearchSubscribe($params) {
        return $this->call_jd_function('jingdong.vas.subscribe.get', $params);
    }
}