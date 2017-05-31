<?php
/**
 * 类目API.
 */

namespace hVenus\JingdongAPI\API;

trait CATEGORY
{

    /**
     * 普通 基础	jingdong.category.read.findAttrById	2.    获取类目属性
     * @param $params
     * @return mixed
     */
    public function CategoryFindAttributeByID($params) {
        return $this->call_jd_function('jingdong.category.read.findAttrById', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findValuesByAttrId	3.    通过类目属性ID获取属性值列表
     * @param $params
     * @return mixed
     */
    public function CategoryFindValuesByAttributeID($params) {
        return $this->call_jd_function('jingdong.category.read.findValuesByAttrId', $params);
    }

    /**
     * 普通 基础	360buy.warecats.get	4.    获取商家类目信息
     * @param $params
     * @return mixed
     */
    public function CategoryGetWareCats($params) {
        return $this->call_jd_function('360buy.warecats.get', $params);
    }

    /**
     * 普通 基础	360buy.wares.vendersellsku.add	5.    添加商家商品销售属性
     * @param $params
     * @return mixed
     */
    public function CategoryAddVendorSellSKU($params) {
        return $this->call_jd_function('360buy.wares.vendersellsku.add', $params);
    }

    /**
     * 普通 基础	360buy.wares.vendersellsku.update	6.    更新商家商品销售属性
     * @param $params
     * @return mixed
     */
    public function CategoryUpdateVendorSellSKU($params) {
        return $this->call_jd_function('360buy.wares.vendersellsku.update', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findAttrsByCategoryId	7.    获取类目属性列表
     * @param $params
     * @return mixed
     */
    public function CategoryFindAttributesByCategoryID($params) {
        return $this->call_jd_function('jingdong.category.read.findAttrsByCategoryId', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findValuesById	8.    获取类目属性值
     * @param $params
     * @return mixed
     */
    public function CategoryFindValuesByID($params) {
        return $this->call_jd_function('jingdong.category.read.findValuesById', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findById	9.    获取单个类目信息
     * @param $params
     * @return mixed
     */
    public function CategoryFindByID($params) {
        return $this->call_jd_function('jingdong.category.read.findById', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findByPId	10.    查找子类目列表
     * @param $params
     * @return mixed
     */
    public function CategoryFindByPID($params) {
        return $this->call_jd_function('jingdong.category.read.findByPId', $params);
    }

    /**
     * 普通 基础	jingdong.pop.vender.cener.venderBrand.query	11.    查询商家已授权的品牌
     * @param $params
     * @return mixed
     */
    public function CategoryQueryVendorBrand($params) {
        return $this->call_jd_function('jingdong.pop.vender.cener.venderBrand.query', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findValuesByIdJos	13.    获取类目属性值
     * @param $params
     * @return mixed
     */
    public function CategoryFindValuesByIDJos($params) {
        return $this->call_jd_function('jingdong.category.read.findValuesByIdJos', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findAttrsByCategoryIdJos	14.    获取类目属性列表
     * @param $params
     * @return mixed
     */
    public function CategoryFindAttributesByCategoryIDJos($params) {
        return $this->call_jd_function('jingdong.category.read.findAttrsByCategoryIdJos', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findAttrByIdJos	14.    获取属性的可选值列表(过滤重复字段名)
     * @param $params
     * @return mixed
     */
    public function CategoryFindAttributeByIDJos($params) {
        return $this->call_jd_function('jingdong.category.read.findAttrByIdJos', $params);
    }

    /**
     * 普通 基础	jingdong.category.read.findValuesByAttrIdJos	15.    通过类目属性ID获取属性值列表
     * @param $params
     * @return mixed
     */
    public function CategoryFindValuesByAttributeIDJos($params) {
        return $this->call_jd_function('jingdong.category.read.findValuesByAttrIdJos', $params);
    }

}