<?php
/**
 * 京准通-快车API.
 */
namespace hVenus\JingdongAPI\API;


trait DSP
{

    /**
     * 普通 基础	jingdong.dsp.kc.orderdetail.list	1.    订单效果总览报表
     * @param $params
     * @return mixed
     */
    public function DSPOrderDetailList($params) {
        return $this->call_jd_function('jingdong.dsp.kc.orderdetail.list', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.adgroup.get	2.    获取单元信息
     * @param $params
     * @return mixed
     */
    public function DSPGetADGroup($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.adgroup.get', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.usertag.get	3.    获取类目结构树
     * @param $params
     * @return mixed
     */
    public function DSPGetUserTag($params) {
        return $this->call_jd_function('jingdong.dsp.kc.usertag.get', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.adgroup.list	4.    获取单元列表
     * @param $params
     * @return mixed
     */
    public function DSPADGroupList($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.adgroup.list', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.addshopad	5.    添加活动创意
     * @param $params
     * @return mixed
     */
    public function DSPAddShopAD($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.addshopad', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.addskuad	6.    添加商品创意
     * @param $params
     * @return mixed
     */
    public function DSPAddSkuAD($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.addskuad', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.keywords.update	7.    更新关键词
     * @param $params
     * @return mixed
     */
    public function DSPUpdateUnitKeywords($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.keywords.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.status.update	8.    批量更新单元状态
     * @param $params
     * @return mixed
     */
    public function DSPUpdateADUnitStatus($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.status.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.querySkuInfo	9.    获取商品创意
     * @param $params
     * @return mixed
     */
    public function DSPQueryADSkuInfo($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.querySkuInfo', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.updatestatus	10.    更新创意状态
     * @param $params
     * @return mixed
     */
    public function DSPUpdateADStatus($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.updatestatus', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.list	11.    获取计划列表
     * @param $params
     * @return mixed
     */
    public function DSPCampaignList($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.list', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.status.update	12.    更新计划状态
     * @param $params
     * @return mixed
     */
    public function DSPUpdateCampaignStatus($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.status.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.goodsprice.update	13.    更新快车单元出价
     * @param $params
     * @return mixed
     */
    public function DSPUpdateGoodsPrice($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.goodsprice.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.adgroup.add	14.    新增快车商品单元
     * @param $params
     * @return mixed
     */
    public function DSPAddADGroup($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.adgroup.add', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campainShop.add	15.    新增快车活动计划
     * @param $params
     * @return mixed
     */
    public function DSPAddCampaignShop($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campainShop.add', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.areadirection.update	16.    更新投放地域
     * @param $params
     * @return mixed
     */
    public function DSPUpdateAreaDirection($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.areadirection.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.shopprice.update	17.    更新快车店铺单元出价
     * @param $params
     * @return mixed
     */
    public function DSPUpdateShopPrice($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.shopprice.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.get	18.    获取计划信息
     * @param $params
     * @return mixed
     */
    public function DSPGetCampaign($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.get	', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.usedKeyword.get	19.    获取用户使用过的关键词
     * @param $params
     * @return mixed
     */
    public function DSPGetUsedKeyword($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.usedKeyword.get', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.add	20.    新增快车商品计划
     * @param $params
     * @return mixed
     */
    public function DSPAddCampaign($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.add', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.validdate.update	21.    更新计划投放时段
     * @param $params
     * @return mixed
     */
    public function DSPUpdateCampaignValidDate($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.validdate.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.daybudget.update	22.    更新计划日预算
     * @param $params
     * @return mixed
     */
    public function DSPUpdateCampaignDayBudget($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.daybudget.update', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.usedKeyword.list	23.    关键词/搜索词效果总览
     * @param $params
     * @return mixed
     */
    public function DSPUsedKeywordList($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.usedKeyword.list', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.report.adgroupkeyword.query	24.    获取单元下所有关键词
     * @param $params
     * @return mixed
     */
    public function DSPQueryADGroupKeyword($params) {
        return $this->call_jd_function('jingdong.dsp.report.adgroupkeyword.query', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.report.queryDailySum	25.    获取计划/单元/创意层级转化数据
     * @param $params
     * @return mixed
     */
    public function DSPQueryDailySum($params) {
        return $this->call_jd_function('jingdong.dsp.report.queryDailySum', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kuaichearea.querycity	26.    区域查询
     * @param $params
     * @return mixed
     */
    public function DSPQueryCity($params) {
        return $this->call_jd_function('jingdong.dsp.kuaichearea.querycity', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.recommendkeyword.get	27.    根据SKU ID推荐关键词
     * @param $params
     * @return mixed
     */
    public function DSPGetRecommendKeyword($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.recommendkeyword.get', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.newkeyword.insert	28.    新增关键词
     * @param $params
     * @return mixed
     */
    public function DSPInsertNewKeyword($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.newkeyword.insert', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.keywordnegative.add	29.    新增否定关键词
     * @param $params
     * @return mixed
     */
    public function DSPAddKeywordNegative($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.keywordnegative.add', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.keywordnegative.delete	30.    删除否定关键词
     * @param $params
     * @return mixed
     */
    public function DSPDeleteKeywordNegative($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.keywordnegative.delete', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.categorypricesuggest.query	31.    三级类目出价建议
     * @param $params
     * @return mixed
     */
    public function DSPQueryCategoryPriceSuggest($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.categorypricesuggest.query', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.keywordpricesuggest.query	32.    关键词出价建议
     * @param $params
     * @return mixed
     */
    public function DSPQueryKeywordPriceSuggest($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.keywordpricesuggest.query', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.keyword.delete	33.    删除关键词
     * @param $params
     * @return mixed
     */
    public function DSPDeleteKeyword($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.keyword.delete', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkckeyword.updateKeyWords	34.    更新关键词
     * @param $params
     * @return mixed
     */
    public function DSPUpdateKeyWords($params) {
        return $this->call_jd_function('jingdong.dsp.adkckeyword.updateKeyWords', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.queryAdListByParam	35.    获取单元下创意列表
     * @param $params
     * @return mixed
     */
    public function DSPQueryADListByParam($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.queryAdListByParam', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.delete	36.    删除快车创意
     * @param $params
     * @return mixed
     */
    public function DSPDeleteAD($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.delete', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.adgroup.delete	37.    删除快车单元
     * @param $params
     * @return mixed
     */
    public function DSPDeleteADGroup($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.adgroup.delete', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.campain.delete	38.    删除快车计划
     * @param $params
     * @return mixed
     */
    public function DSPDeleteCampaign($params) {
        return $this->call_jd_function('jingdong.dsp.kc.campain.delete', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ad.uploadPic	39.    上传图片
     * @param $params
     * @return mixed
     */
    public function DSPUploadADPic($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ad.uploadPic', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.picture.upload	40.    上传图片，返回上传后的地址
     * @param $params
     * @return mixed
     */
    public function DSPUploadPicture($params) {
        return $this->call_jd_function('jingdong.dsp.picture.upload', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.dmp.getBindCrowd	41.    获取绑定人群
     * @param $params
     * @return mixed
     */
    public function DSPGetBindCrowd($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.dmp.getBindCrowd', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.dmp.getcrowdlist	42.    获取人群信息
     * @param $params
     * @return mixed
     */
    public function DSPGetCrowdList($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.dmp.getcrowdlist', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.adkcunit.dmp.batchBindCrowdRef	43.    绑定人群包到单元上
     * @param $params
     * @return mixed
     */
    public function DSPBatchBindCrowdRef($params) {
        return $this->call_jd_function('jingdong.dsp.adkcunit.dmp.batchBindCrowdRef', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.kc.ordereffectdetail	44.    获取快车订单效果总揽
     * @param $params
     * @return mixed
     */
    public function DSPOrderEffectDetail($params) {
        return $this->call_jd_function('jingdong.dsp.kc.ordereffectdetail', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.report.queryCampDailySum	45.    获取计划维度相关数据
     * @param $params
     * @return mixed
     */
    public function DSPQueryCampaignDailySum($params) {
        return $this->call_jd_function('jingdong.dsp.report.queryCampDailySum', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.report.queryGroupDailySum	46.    获取单元转化数据
     * @param $params
     * @return mixed
     */
    public function DSPQueryGroupDailySum($params) {
        return $this->call_jd_function('jingdong.dsp.report.queryGroupDailySum', $params);
    }

    /**
     * 普通 基础	jingdong.dsp.report.queryAdDailySum	47.    获取创意转化数据
     * @param $params
     * @return mixed
     */
    public function DSPQueryADDailySum($params) {
        return $this->call_jd_function('jingdong.dsp.report.queryAdDailySum', $params);
    }

}