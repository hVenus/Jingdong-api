<?php
/**
 * 退款API.
 */

namespace hVenus\JingdongAPI\API;


trait REFUND
{

    /**
     * 普通 基础	jingdong.pop.afs.soa.refundapply.queryPageList	1.    退款审核单列表查询
     * @param $params
     * @return mixed
     */
    public function RefundQueryPageList($params) {
        return $this->call_jd_function('jingdong.pop.afs.soa.refundapply.queryPageList', $params);
    }

    /**
     * 普通 基础	jingdong.pop.afs.soa.refundapply.queryById	2.    根据Id查询退款审核单
     * @param $params
     * @return mixed
     */
    public function RefundQueryByID($params) {
        return $this->call_jd_function('jingdong.pop.afs.soa.refundapply.queryById', $params);
    }

    /**
     * 普通 基础	jingdong.pop.afs.soa.refundapply.replyRefund	3.    商家审核退款单
     * @param $params
     * @return mixed
     */
    public function RefundReviewApply($params) {
        return $this->call_jd_function('jingdong.pop.afs.soa.refundapply.replyRefund', $params);
    }

    /**
     * 普通 基础	jingdong.pop.afs.soa.refundapply.getWaitRefundNum	4.    待处理退款单数查询
     * @param $params
     * @return mixed
     */
    public function RefundGetWaitNum($params) {
        return $this->call_jd_function('jingdong.pop.afs.soa.refundapply.getWaitRefundNum', $params);
    }
}