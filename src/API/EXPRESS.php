<?php
/**
 * 快递API.
 */

namespace hVenus\JingdongAPI\API;


trait EXPRESS
{
    /**
     * 普通 基础 jingdong.etms.waybillcode.get      获取京东快递运单号
     * @param $param
     * @return mixed
     */
    public function ExpressGetWaybillCode($param) {
        return $this->call_jd_function('jingdong.etms.waybillcode.get', $param);
    }

    /**
     * 普通 基础 jingdong.etms.range.check      是否可以京配
     * @param $param
     * @return string
     */
    public function ExpressRangeCheck($param) {
        return $this->call_jd_function('jingdong.etms.range.check', $param);
    }

    /**
     * 普通 基础 jingdong.etms.waybill.send      青龙接单接口
     * @param $param
     * @return string
     */
    public function ExpressWaybillSend($param) {
        return $this->call_jd_function('jingdong.etms.waybill.send', $param);
    }

    /**
     * 普通 基础 jingdong.etms.order.print      获取京东快递运单打印
     * @param $param
     * @return string
     */
    public function ExpressOrderPrint($param) {
        return $this->call_jd_function('jingdong.etms.order.print', $param);
    }

    /**
     * 普通 基础 jingdong.etms.package.update      修改京东快递包裹数
     * @param $param
     * @return string
     */
    public function ExpressPackageUpdate($param) {
        return $this->call_jd_function('jingdong.etms.package.update', $param);
    }

    /**
     * 普通 基础 jingdong.etms.trace.get      查询京东快递物流跟踪信息
     * @param $param
     * @return string
     */
    public function ExpressTraceGet($param) {
        return $this->call_jd_function('jingdong.etms.trace.get', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.receive.eport.send      接收Eport相关扩展信息
     * @param $param
     * @return string
     */
    public function ExpressReceiveEportSend($param) {
        return $this->call_jd_function('jingdong.ldop.receive.eport.send', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.receive.order.intercept      运单拦截
     * @param $param
     * @return mixed
     */
    public function ExpressInterceptOrder($param) {
        return $this->call_jd_function('jingdong.ldop.receive.order.intercept', $param);
    }

    /**
     * jingdong.ldop.alpha.provider.sync.branch      网点信息同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderBranch($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.branch', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sync.lastdc      网点末端分拨中心对应关系维护接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderLastDC($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.lastdc', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sync.dc      分拨中心集包地信息同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderDC($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.dc', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sync.bigshot      大头笔信息同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderBigShot($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.bigshot', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sync.branchrange      承运商网点配送范围维护接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderBranchRange($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.branchrange', $param);
    }

    /**
     * 普通 基础 jingdong.etms.outerTrace.queryByBusiId      通过商家编码查询外单全程跟踪
     * @param $param
     * @return mixed
     */
    public function ExpressGetOuterTraceByBusiID($param) {
        return $this->call_jd_function('jingdong.etms.outerTrace.queryByBusiId', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.stock.query      商家单号库存查询接口
     * @param $param
     * @return mixed
     */
    public function ExpressGetProviderStock($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.stock.query', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.stock.increase      运单单号库存管理接口
     * @param $param
     * @return mixed
     */
    public function ExpressUpdateProviderStock($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.stock.increase', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sign.approve      签约结果回传接口
     * @param $param
     * @return mixed
     */
    public function ExpressApproveProviderSign($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sign.approve', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.waybill.unbind       订运关系解绑接口
     * @param $param
     * @return mixed
     */
    public function ExpressUnbindWaybill($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.waybill.unbind', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.vendor.recharge.query      商家充值记录查询接口
     * @param $param
     * @return mixed
     */
    public function ExpressSearchVendorRecharge($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.vendor.recharge.query', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.stock.reset      商家单号库存清零接口
     * @param $param
     * @return mixed
     */
    public function ExpressResetProviderStock($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.stock.reset', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.vendor.stock.query      商家库存查询接口
     * @param $param
     * @return mixed
     */
    public function ExpressGetVendorStock($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.vendor.stock.query', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.vendor.bigshot.query      大头笔信息查询接口
     * @param $param
     * @return mixed
     */
    public function ExpressGetVendorBigShot($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.vendor.bigshot.query', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.query      获取承运商列表
     * @param $param
     * @return mixed
     */
    public function ExpressGetProviderList($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.query', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.waybill.receive      ISV、POP后台推送运单接口
     * @param $param
     * @return mixed
     */
    public function ExpressReceiveWaybill($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.waybill.receive', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.receive.pickuporder.receive      取件单下单
     * @param $param
     * @return mixed
     */
    public function ExpressAddPickupOrder($param) {
        return $this->call_jd_function('jingdong.ldop.receive.pickuporder.receive', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.receive.trace.get      查询物流跟踪消息
     * @param $param
     * @return mixed
     */
    public function ExpressGetReceiveTrace($param) {
        return $this->call_jd_function('jingdong.ldop.receive.trace.get', $param);
    }

    /**
     * 普通 基础 jingdong.etms.range.check.gateway      是否可以京配
     * @param $param
     * @return mixed
     */
    public function ExpressGatewayRangeCheck($param) {
        return $this->call_jd_function('jingdong.etms.range.check.gateway', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.provider.sync.waybillCodeRule      单号规则同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressSyncProviderWaybillCodeRule($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.provider.sync.waybillCodeRule', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.waybill.jos.Convert      Jos接口内部转换-下单接口
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosWaybill($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.waybill.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.distributeCenter.jos.Convert      分拨中心集包地信息同步接口内部转换实现
     * @param $param
     * @return mixed
     */
    public function  ExpressConvertJosDistributeCenter($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.distributeCenter.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.lastDc.jos.Convert      网点末端分拨中心对应关系维护接口内部转换实现
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosLastDC($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.lastDc.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.branchRange.jos.Convert      网点配送范围同步接口内部转换实现
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosBranchRange($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.branchRange.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.bigShot.jos.Convert      大头笔同步接口内部转换实现
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosBigShot($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.bigShot.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.waybillRule.jos.Convert      单号规则同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosWaybillRule($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.waybillRule.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.branch.jos.Convert      网点同步接口
     * @param $param
     * @return mixed
     */
    public function ExpressConvertJosBranch($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.branch.jos.Convert', $param);
    }

    /**
     * 普通 基础 jingdong.ldop.alpha.waybill.query      查询运单基本信息接口
     * @param $param
     * @return mixed
     */
    public function ExpressGetWaybill($param) {
        return $this->call_jd_function('jingdong.ldop.alpha.waybill.query', $param);
    }













}