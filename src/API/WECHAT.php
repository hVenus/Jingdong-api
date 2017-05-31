<?php
/**
 * 微信手Q开放API
 */

namespace hVenus\JingdongAPI\API;


trait WECHAT
{

    /**
     * 普通 基础	jingdong.wxsq.mjgj.link.GetOpenLink	1.    外部链接呼起微信环境
     * @param $params
     * @return mixed
     */
    public function WechatGetOpenLink($params) {
        return $this->call_jd_function('jingdong.wxsq.mjgj.link.GetOpenLink', $params);
    }
}