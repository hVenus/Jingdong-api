<?php
/**
 * 店铺API.
 */
namespace hVenus\JingdongAPI\API;


trait SHOP
{

    /**
     * 高级 基础	360buy.sellercat.add	1.    添加卖家自定义店内分类
     * @param $params
     * @return mixed
     */
    public function ShopAddSellerCategory($params) {
        return $this->call_jd_function('360buy.sellercat.add', $params);
    }

    /**
     * 高级 基础	360buy.sellercat.update	2.    更新商家自定义店内分类
     * @param $params
     * @return mixed
     */
    public function ShopUpdateSellerCategory($params) {
        return $this->call_jd_function('360buy.sellercat.update', $params);
    }

    /**
     * 高级 基础	360buy.sellercat.delete	3.    删除商家自定义店内分类
     * @param $params
     * @return mixed
     */
    public function ShopDeleteSellerCategory($params) {
        return $this->call_jd_function('360buy.sellercat.delete', $params);
    }

    /**
     * 高级 基础	360buy.sellercats.get	4.    获取前台展示的商家自定义店内分类
     * @param $params
     * @return mixed
     */
    public function ShopGetSellerCategories($params) {
        return $this->call_jd_function('360buy.sellercats.get', $params);
    }

    /**
     * 高级 基础	jingdong.seller.vender.info.get	5.    查询商家基本信息
     * @param $params
     * @return mixed
     */
    public function ShopGetInfo($params) {
        return $this->call_jd_function('jingdong.seller.vender.info.get', $params);
    }

    /**
     * 高级 基础	jingdong.vender.shop.query	6.    店铺信息查询
     * @param $params
     * @return mixed
     */
    public function ShopQueryShop($params) {
        return $this->call_jd_function('jingdong.vender.shop.query', $params);
    }

    /**
     * 普通 基础	jingdong.vender.returnaddress.query	7.    查询退货地址列表
     * @param $params
     * @return mixed
     */
    public function ShopQueryReturnAddress($params) {
        return $this->call_jd_function('jingdong.vender.returnaddress.query', $params);
    }

    /**
     * 普通 基础	jingdong.vender.shipaddress.query	8.    查询发货地址列表
     * @param $params
     * @return mixed
     */
    public function ShopQueryShipAddress($params) {
        return $this->call_jd_function('jingdong.vender.shipaddress.query', $params);
    }
}