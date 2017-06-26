<?php
/**
 * 云海API.
 */

namespace hVenus\JingdongAPI\API;


trait DATA
{

    /**
     * 普通 基础	jingdong.hostingdata.jddp.status.get	1.    任务状态查询
     * @param $params
     * @return mixed
     */
    public function DataGetStatus($params) {
        return $this->call_jd_function('	jingdong.hostingdata.jddp.status.get', $params);
    }

    /**
     * 普通 基础	jingdong.hostingdata.jddp.data.add	2.    上传
     * @param $params
     * @return mixed
     */
    public function DataAddData($params) {
        return $this->call_jd_function('	jingdong.hostingdata.jddp.data.add', $params);
    }

    /**
     * 普通 基础	jingdong.hostingdata.jddp.data.list.get	3.    下载
     * @param $params
     * @return mixed
     */
    public function DataGetData($params) {
        return $this->call_jd_function('	jingdong.hostingdata.jddp.data.list.get', $params);
    }

    /**
     * 普通 基础	jingdong.hostingdata.jddp.data.list.get.paipai	4.    云海ISV结果表的数据下载
     * @param $params
     * @return mixed
     */
    public function DataGetISVData($params) {
        return $this->call_jd_function('jingdong.hostingdata.jddp.data.list.get.paipai', $params);
    }
}