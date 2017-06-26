<?php
/**
 * 订单API.
 */

namespace hVenus\JingdongAPI\API;


trait ORDER
{
    /**
     * 普通 基础    360buy.order.search    1.    订单检索
     * @param $params
     * @return string
     */
    public function jd_360buy_order_search($params) {
        return $this->call_jd_function('360buy.order.search', $params);
    }


    /**
     * 普通 基础	jingdong.pop.order.notPayOrderInfo	1.    批量查询未付款订单
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_order_notPayOrderInfo($params) {
        return $this->call_jd_function('jingdong.pop.order.notPayOrderInfo', $params);
    }

    /**
     * 普通 基础	jingdong.pop.order.notPayOrderById	1.    未付款订单单条记录查询
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_order_notPayOrderById($params) {
        return $this->call_jd_function('jingdong.pop.order.notPayOrderById', $params);
    }

    /**
     * 普通 基础	360buy.order.get	2.    获取单个订单
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_get($params) {
        return $this->call_jd_function('360buy.order.get', $params);
    }

    /**
     * 普通 基础	360buy.order.fbp.search	3.    FBP订单检索
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_fbp_search($params) {
        return $this->call_jd_function('360buy.order.fbp.search', $params);
    }

    /**
     * 普通 基础	360buy.order.fbp.get	4.    FBP获取单个订单
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_fbp_get($params) {
        return $this->call_jd_function('360buy.order.fbp.get', $params);
    }

    /**
     * 普通 基础	360buy.order.print	5.    面单打印
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_print($params) {
        return $this->call_jd_function('360buy.order.print', $params);
    }

    /**
     * 普通 基础	360buy.order.print.data.get	6.    获取面单打印数据
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_print_data_get($params) {
        return $this->call_jd_function('360buy.order.print.data.get', $params);
    }

    /**
     * 普通 基础	360buy.order.sop.print.data.get	7.    SOP获取面单打印数据
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sop_print_data_get($params) {
        return $this->call_jd_function('360buy.order.sop.print.data.get', $params);
    }

    /**
     * 普通 基础	360buy.order.lbp.print.data.get	8.    LBP获取面单打印数据
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_lbp_print_data_get($params) {
        return $this->call_jd_function('360buy.order.lbp.print.data.get', $params);
    }


    /**
     * 普通 基础	360buy.order.sopl.print.data.get	9.    SOPL获取面单打印数据
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sopl_print_data_get($params) {
        return $this->call_jd_function('360buy.order.sopl.print.data.get', $params);
    }

    /**
     * 普通 基础	360buy.order.sop.outstorage	10.    订单SOP出库
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sop_outstorage($params) {
        return $this->call_jd_function('360buy.order.sop.outstorage', $params);
    }

    /**
     * 普通 基础	360buy.order.lbp.outstorage	11.    订单LBP出库
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_lbp_outstorage($params) {
        return $this->call_jd_function('360buy.order.lbp.outstorage', $params);
    }

    /**
     * 普通 基础	360buy.order.sopl.outstorage	12.    订单SOPL出库
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sopl_outstorage($params) {
        return $this->call_jd_function('360buy.order.sopl.outstorage', $params);
    }

    /**
     * 普通 基础	360buy.overseas.order.sop.outstorage	13.    海外购订单出库
     * @param $params
     * @return mixed
     */
    public function jd_360buy_overseas_order_sop_outstorage($params) {
        return $this->call_jd_function('360buy.overseas.order.sop.outstorage', $params);
    }

    /**
     * 普通 基础	360buy.overseas.order.sop.delivery	14.    海外购订单发货
     * @param $params
     * @return mixed
     */
    public function jd_360buy_overseas_order_sop_delivery($params) {
        return $this->call_jd_function('360buy.overseas.order.sop.delivery', $params);
    }

    /**
     * 普通 基础	360buy.order.sop.waybill.update	15.    SOP修改运单号
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sop_waybill_update($params) {
        return $this->call_jd_function('360buy.order.sop.waybill.update', $params);
    }

    /**
     * 普通 基础	360buy.order.sopl.waybill.update	16.    SOPL修改运单号
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_sopl_waybill_update($params) {
        return $this->call_jd_function('360buy.order.sopl.waybill.update', $params);
    }

    /**
     * 普通 基础	360buy.order.lbp.waybill.update	17.    LBP修改运单号
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_lbp_waybill_update($params) {
        return $this->call_jd_function('360buy.order.lbp.waybill.update', $params);
    }

    /**
     * 普通 基础	jingdong.order.venderRemark.queryByOrderId	18.    查询商家备注
     * @param $params
     * @return mixed
     */
    public function jingdong_order_venderRemark_queryByOrderId($params) {
        return $this->call_jd_function('jingdong.order.venderRemark.queryByOrderId', $params);
    }

    /**
     * 普通 基础	360buy.order.vender.remark.update	19.    商家订单备注修改
     * @param $params
     * @return mixed
     */
    public function jd_360buy_order_vender_remark_update($params) {
        return $this->call_jd_function('360buy.order.vender.remark.update', $params);
    }

    /**
     * 普通 基础	jingdong.order.orderDelete.apply	20.    删单申请
     * @param $params
     * @return mixed
     */
    public function jingdong_order_orderDelete_apply($params) {
        return $this->call_jd_function('jingdong.order.orderDelete.apply', $params);
    }

    /**
     * 普通 基础	jingdong.order.orderDelete.cancelApply	21.    取消删单申请
     * @param $params
     * @return mixed
     */
    public function jingdong_order_orderDelete_cancelApply($params) {
        return $this->call_jd_function('jingdong.order.orderDelete.cancelApply', $params);
    }

    /**
     * 普通 基础	jingdong.pop.oto.locorderinfos.get	22.    批量查询商家的码信息
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_oto_locorderinfos_get($params) {
        return $this->call_jd_function('jingdong.pop.oto.locorderinfos.get', $params);
    }

    /**
     * 普通 基础	jingdong.pop.oto.locorderinfo.get	23.    根据订单号查询码信息
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_oto_locorderinfo_get($params) {
        return $this->call_jd_function('jingdong.pop.oto.locorderinfo.get', $params);
    }

    /**
     * 普通 基础	jingdong.pop.oto.checkNumbers.upload	24.    商家回传验证码
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_oto_checkNumbers_upload($params) {
        return $this->call_jd_function('jingdong.pop.oto.checkNumbers.upload', $params);
    }

    /**
     * 普通 基础	jingdong.pop.oto.CheckNumber.consumer	25.    消费验证码
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_oto_CheckNumber_consumer($params) {
        return $this->call_jd_function('jingdong.pop.oto.CheckNumber.consumer', $params);
    }

    /**
     * 普通 基础	jingdong.pop.oto.checknumberinfo.get	26.    获取验证码信息
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_oto_checknumberinfo_get($params) {
        return $this->call_jd_function('jingdong.pop.oto.checknumberinfo.get', $params);
    }

    /**
     * 普通 基础	jingdong.pop.order.getRemarkByCreateTime	27.    根据创建时间获取订单备注
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_order_getRemarkByCreateTime($params) {
        return $this->call_jd_function('jingdong.pop.order.getRemarkByCreateTime', $params);
    }

    /**
     * 普通 基础	jingdong.pop.order.getRemarkByModifyTime	28.    根据修改时间段获取订单备注
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_order_getRemarkByModifyTime($params) {
        return $this->call_jd_function('jingdong.pop.order.getRemarkByModifyTime', $params);
    }

    /**
     * 普通 基础	jingdong.SkuFareTemplateService.getTemplates	29.    查询单品模板
     * @param $params
     * @return mixed
     */
    public function jingdong_SkuFareTemplateService_getTemplates($params) {
        return $this->call_jd_function('jingdong.SkuFareTemplateService.getTemplates', $params);
    }

    /**
     * 普通 基础	jingdong.SkuFareTemplateService.getTemplateRules	30.    查询单品模板规则
     * @param $params
     * @return mixed
     */
    public function jingdong_SkuFareTemplateService_getTemplateRules($params) {
        return $this->call_jd_function('jingdong.SkuFareTemplateService.getTemplateRules', $params);
    }

    /**
     * 普通 基础	jingdong.acty.queryRegistrationDataCount	31.    查询订单总数
     * @param $params
     * @return mixed
     */
    public function jingdong_acty_queryRegistrationDataCount($params) {
        return $this->call_jd_function('jingdong.acty.queryRegistrationDataCount', $params);
    }

    /**
     * 普通 基础	jingdong.acty.queryRegistrationItemList	32.    查询参赛人
     * @param $params
     * @return mixed
     */
    public function jingdong_acty_queryRegistrationItemList($params) {
        return $this->call_jd_function('jingdong.acty.queryRegistrationItemList', $params);
    }

    /**
     * 普通 基础	jingdong.pop.order.modifyOrderAddr	33.    修改订单收货地址
     * @param $params
     * @return mixed
     */
    public function jingdong_pop_order_modifyOrderAddr($params) {
        return $this->call_jd_function('jingdong.pop.order.modifyOrderAddr', $params);
    }
}