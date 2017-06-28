<?php
/**
 * 视频服务API.
 */

namespace hVenus\JingdongAPI\API;


trait VIDEO
{

    /**
     * 普通 基础	jingdong.video.update	1.    更新单个视频
     * @param $params
     * @return mixed
     */
    public function jingdong_video_update($params) {
        return $this->call_jd_function('jingdong.video.update', $params);
    }

    /**
     * 普通 基础	jingdong.video.category.add	2.    添加视频分类
     * @param $params
     * @return mixed
     */
    public function jingdong_video_category_add($params) {
        return $this->call_jd_function('jingdong.video.category.add', $params);
    }

    /**
     * 普通 基础	jingdong.video.category.update	3.    更新视频分类
     * @param $params
     * @return mixed
     */
    public function jingdong_video_category_update($params) {
        return $this->call_jd_function('jingdong.video.category.update', $params);
    }

    /**
     * 普通 基础	jingdong.video.category.delete	4.    批量删除视频分类
     * @param $params
     * @return mixed
     */
    public function jingdong_video_category_delete($params) {
        return $this->call_jd_function('jingdong.video.category.delete', $params);
    }

    /**
     * 普通 基础	jingdong.video.category.get	5.    获取视频分类
     * @param $params
     * @return mixed
     */
    public function jingdong_video_category_get($params) {
        return $this->call_jd_function('jingdong.video.category.get', $params);
    }

    /**
     * 普通 基础	jingdong.video.add	6.    添加视频
     * @param $params
     * @return mixed
     */
    public function jingdong_video_add($params) {
        return $this->call_jd_function('jingdong.video.add', $params);
    }

    /**
     * 普通 基础	jingdong.video.query	7.    批量查询视频
     * @param $params
     * @return mixed
     */
    public function jingdong_video_query($params) {
        return $this->call_jd_function('jingdong.video.query', $params);
    }

    /**
     * 普通 基础	jingdong.video.delete	8.    批量删除视频
     * @param $params
     * @return mixed
     */
    public function jingdong_video_delete($params) {
        return $this->call_jd_function('jingdong.video.delete', $params);
    }

    /**
     * 普通 基础	jingdong.video.search	9.    搜索视频
     * @param $params
     * @return mixed
     */
    public function jingdong_video_search($params) {
        return $this->call_jd_function('jingdong.video.search', $params);
    }

}