<?php
/**
 * 品控质检API.
 */
namespace hVenus\JingdongAPI\API;


trait QUALITY
{

    /**
     * 普通 基础	jingdong.market.service.qt.report.add	1.    新增质检报告
     * @param $params
     * @return mixed
     */
    public function QualityAddReport($params) {
        return $this->call_jd_function('jingdong.market.service.qt.report.add', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.qt.report.update	2.    更新质检报告
     * @param $params
     * @return mixed
     */
    public function QualityUpdateReport($params) {
        return $this->call_jd_function('jingdong.market.service.qt.report.update', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.qt.report.get	3.    获得质检报告
     * @param $params
     * @return mixed
     */
    public function QualityGetReport($params) {
        return $this->call_jd_function('jingdong.market.service.qt.report.get', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.property.get	4.    服务属性查询
     * @param $params
     * @return mixed
     */
    public function QualityGetProperty($params) {
        return $this->call_jd_function('jingdong.market.service.property.get', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.qt.subscribe.get	5.    获取订购关系
     * @param $params
     * @return mixed
     */
    public function QualityGetSubscribe($params) {
        return $this->call_jd_function('jingdong.market.service.qt.subscribe.get', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.qt.report.list.get	6.    查询质检报告列表
     * @param $params
     * @return mixed
     */
    public function QualityGetReportList($params) {
        return $this->call_jd_function('jingdong.market.service.qt.report.list.get', $params);
    }

    /**
     * 普通 基础	jingdong.market.service.qt.report.delete	7.    删除质检报告
     * @param $params
     * @return mixed
     */
    public function QualityDeleteReport($params) {
        return $this->call_jd_function('jingdong.market.service.qt.report.delete', $params);
    }
}