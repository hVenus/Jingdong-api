<?php
/**
 * 阿尔法API.
 */

namespace hVenus\JingdongAPI\API;


trait ALPHA
{

    /**
     * 普通 基础	jingdong.agingtempl.get	1.    商家时效模板查询接口
     * @param $param
     * @return mixed
     */
    public function AlphaGetAgingTemplate($param) {
        return $this->call_jd_function('jingdong.agingtempl.get', $param);
    }

    /**
     * 普通 基础	jingdong.getVerList.search	2.    获取核销记录
     * @param $param
     * @return mixed
     */
    public function AlphaSearchGetVerList($param) {
        return $this->call_jd_function('jingdong.getVerList.search', $param);
    }

    /**
     * 普通 基础	jingdong.getVerList.yfb.search	3.    获取核销记录预发布
     * @param $param
     * @return mixed
     */
    public function AlphaSearchGetVerListYFB($param) {
        return $this->call_jd_function('jingdong.getVerList.yfb.search', $param);
    }

    /**
     * 普通 基础	jingdong.deliRecomdCarriers.search	4.    获取商家发货推荐承运商
     * @param $param
     * @return mixed
     */
    public function AlphaSearchDeliveryRecommendCarriers($param) {
        return $this->call_jd_function('jingdong.deliRecomdCarriers.search', $param);
    }

    /**
     * 普通 基础	jingdong.pausedorder.search	5.    预约暂停订单数据接口
     * @param $param
     * @return mixed
     */
    public function AlphaSearchPausedOrder($param) {
        return $this->call_jd_function('jingdong.pausedorder.search', $param);
    }

    /**
     * 普通 基础	jingdong.getVerOrder.search	6.    获取核销订单
     * @param $param
     * @return mixed
     */
    public function AlphaSearchGetVerOrder($param) {
        return $this->call_jd_function('jingdong.getVerOrder.search', $param);
    }

    /**
     * 普通 基础	jingdong.getVerOrder.yfb.search	7.    获取核销订单
     * @param $param
     * @return mixed
     */
    public function AlphaSearchGerVerOrderFYB($param) {
        return $this->call_jd_function('	jingdong.getVerOrder.yfb.search', $param);
    }
}