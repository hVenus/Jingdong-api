<?php
/**
 * ECLP仓海API，商家使用.
 */
namespace hVenus\JingdongAPI\API;


trait ECLP
{

    /**
     * 普通 基础 jingdong.eclp.master.queryDept      获取事业部信息
     * @param $param
     * @return mixed
     */
    public function ECLPGetDept($param) {
        return $this->call_jd_function('jingdong.eclp.master.queryDept', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.queryWarehouse      获取仓库信息
     * @param $param
     * @return mixed
     */
    public function ECLPGetWarehouse($param) {
        return $this->call_jd_function('jingdong.eclp.master.queryWarehouse', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.queryShipper      获取承运商信息
     * @param $param
     * @return mixed
     */
    public function ECLPGetShipper($param) {
        return $this->call_jd_function('jingdong.eclp.master.queryShipper', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.querySpSource      获取销售平台信息
     * @param $param
     * @return mixed
     */
    public function ECLPGetSpSource($param) {
        return $this->call_jd_function('jingdong.eclp.master.querySpSource', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.insertShop      新增店铺
     * @param $param
     * @return mixed
     */
    public function ECLPAddShop($param) {
        return $this->call_jd_function('jingdong.eclp.master.insertShop', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.updateShop      修改店铺
     * @param $param
     * @return mixed
     */
    public function ECLPUpdateShop($param) {
        return $this->call_jd_function('jingdong.eclp.master.updateShop', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.queryShop      查询店铺信息
     * @param $param
     * @return mixed
     */
    public function ECLPSearchShop($param) {
        return $this->call_jd_function('jingdong.eclp.master.queryShop', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.addSupplier      新增供应商
     * @param $param
     * @return mixed
     */
    public function ECLPAddSupplier($param) {
        return $this->call_jd_function('jingdong.eclp.master.addSupplier', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.modifySupplier      修改供应商
     * @param $param
     * @return mixed
     */
    public function ECLPGetUpdateSupplier($param) {
        return $this->call_jd_function('jingdong.eclp.master.modifySupplier', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.master.querySupplier      获取供应商信息
     * @param $param
     * @return mixed
     */
    public function ECLPGetSupplier($param) {
        return $this->call_jd_function('jingdong.eclp.master.querySupplier', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.category.getFirstLevelCategories      查询商品一级分类
     * @param $param
     * @return mixed
     */
    public function ECLPGetFirstLevelCategories($param) {
        return $this->call_jd_function('jingdong.eclp.category.getFirstLevelCategories', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.category.getSecondLevelCategories      查询商品二级分类
     * @param $param
     * @return mixed
     */
    public function ECLPGetSecondLevelCategories($param) {
        return $this->call_jd_function('jingdong.eclp.category.getSecondLevelCategories', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.category.getThirdLevelCategories      查询商品三级分类
     * @param $param
     * @return mixed
     */
    public function ECLPGetThirdLevelCategories($param) {
        return $this->call_jd_function('jingdong.eclp.category.getThirdLevelCategories', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.goods.transportGoodsInfo      添加主商品信息
     * @param $param
     * @return mixed
     */
    public function ECLPAddGoodsInfo($param) {
        return $this->call_jd_function('jingdong.eclp.goods.transportGoodsInfo', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.goods.updateGoodsInfo      修改主商品信息
     * @param $param
     * @return mixed
     */
    public function ECLPUpdateGoodsInfo($param) {
        return $this->call_jd_function('jingdong.eclp.goods.updateGoodsInfo', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.goods.queryGoodsInfo      查询主商品信息
     * @param $param
     * @return mixed
     */
    public function ECLPSearchGoodsInfo($param) {
        return $this->call_jd_function('jingdong.eclp.goods.queryGoodsInfo', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.po.addPoOrder      采购入库单下发
     * @param $param
     * @return mixed
     */
    public function ECLPAddEntryWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.po.addPoOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.po.cancalPoOrder      采购单取消
     * @param $param
     * @return mixed
     */
    public function ECLPCancelEntryWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.po.cancalPoOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.po.queryPoOrder      采购入库单详情查询
     * @param $param
     * @return mixed
     */
    public function ECLPGetEntryWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.po.queryPoOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.stock.queryStock      仓库实物库存查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchStock($param) {
        return $this->call_jd_function('jingdong.eclp.stock.queryStock', $param);
    }
    public function jingdong_eclp_stock_queryAdventGoodsStock() {return '';}

    /**
     * 普通 基础 jingdong.eclp.stock.queryAdventGoodsStock      临期商品库存查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchAdventGoodsStock($param) {
        return $this->call_jd_function('jingdong.eclp.stock.queryAdventGoodsStock', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.addOrder      销售出库单下发
     * @param $param
     * @return mixed
     */
    public function ECLPAddOutWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.order.addOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.cancelOrder      出库单取消接口
     * @param $param
     * @return mixed
     */
    public function ECLPCancelOutWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.order.cancelOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.queryOrderStatus      销售出库单状态查询
     * @param $param
     * @return mixed
     */
    public function ECLPGetOutWarehouseOrderStatus($param) {
        return $this->call_jd_function('jingdong.eclp.order.queryOrderStatus', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.queryOrder      销售出库单明细查询
     * @param $param
     * @return mixed
     */
    public function ECLPGetOutWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.order.queryOrder', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.queryOrderPacks      销售出库单包裹数据查询
     * @param $param
     * @return mixed
     */
    public function ECLPGetOutWarehouseOrderPacks($param) {
        return $this->call_jd_function('jingdong.eclp.order.queryOrderPacks', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rtw.transportRtw      退货入库单下发
     * @param $param
     * @return mixed
     */
    public function ECLPAddReturnWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rtw.transportRtw', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rtw.queryRtw      退货入库单详情查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchReturnWarehouseOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rtw.queryRtw', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.checkstock.queryCheckStockProfit      盘盈单查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchCheckStockProfit($param) {
        return $this->call_jd_function('jingdong.eclp.checkstock.queryCheckStockProfit', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.checkstock.queryCheckStockLosses      盘亏单查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchChekStockLosses($param) {
        return $this->call_jd_function('jingdong.eclp.checkstock.queryCheckStockLosses', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rts.isvRtsTransfer      退供应商下发
     * @param $param
     * @return mixed
     */
    public function ECLPAddReturnToSupplierOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rts.isvRtsTransfer', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rts.isvRtsCancel      退供应商取消
     * @param $param
     * @return mixed
     */
    public function ECLPCancelReturnToSupplierOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rts.isvRtsCancel', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rts.isvRtsQuery      退供应商查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchReturnToSupplierOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rts.isvRtsQuery', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.goods.queryGoodsSerial      查询出入库序列号
     * @param $param
     * @return mixed
     */
    public function ECLPGetGoodsSerial($param) {
        return $this->call_jd_function('jingdong.eclp.goods.queryGoodsSerial', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.stock.querySumStock      查询库存汇总数据
     * @param $param
     * @return mixed
     */
    public function ECLPSearchSumStock($param) {
        return $this->call_jd_function('jingdong.eclp.stock.querySumStock', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.queryOrderListByStatus      客户订单按状态查询接口
     * @param $param
     * @return mixed
     */
    public function ECLPSearchOrderByStatus($param) {
        return $this->call_jd_function('jingdong.eclp.order.queryOrderListByStatus', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.stock.queryVmiShopStockFlow      VMI店铺库存流水查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchWmiShopStockFlow($param) {
        return $this->call_jd_function('jingdong.eclp.stock.queryVmiShopStockFlow', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.order.queryOrderVMI      VMI订单查询接口
     * @param $param
     * @return mixed
     */
    public function ECLPSearchWmiOrder($param) {
        return $this->call_jd_function('jingdong.eclp.order.queryOrderVMI', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.stock.queryVmiShopStock      VMI云仓店铺库存查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchWmiShopStock($param) {
        return $this->call_jd_function('jingdong.eclp.stock.queryVmiShopStock', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition      根据货主编号和业务类型等查询序列号详情
     * @param $param
     * @return mixed
     */
    public function ECLPSearchSerialByOwnerNoAndCondition($param) {
        return $this->call_jd_function('jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.serial.queryBatchSerialBySku      根据商品和批量序列号查询序列号最终状态
     * @param $param
     * @return mixed
     */
    public function ECLPSearchGoodsSIDBySkuAndBatchSerial($param) {
        return $this->call_jd_function('jingdong.eclp.serial.queryBatchSerialBySku', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.serial.querySerialBySkuAndSerial      根据商品和序列号查询流水
     * @param $param
     * @return mixed
     */
    public function ECLPSearchGoodsFlowBySkuAndSerial($param) {
        return $this->call_jd_function('jingdong.eclp.serial.querySerialBySkuAndSerial', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.serial.queryPageSerialByBillNo      根据订单号查询序列号
     * @param $param
     * @return mixed
     */
    public function ECLPSearchSerialByBillNo($param) {
        return $this->call_jd_function('jingdong.eclp.serial.queryPageSerialByBillNo', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.serial.queryInStockSIDBySku      在库序列号查询
     * @param $param
     * @return mixed
     */
    public function ECLPSearchInStockSIDBySku($param) {
        return $this->call_jd_function('jingdong.eclp.serial.queryInStockSIDBySku', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.ib.addOutsideMain      新增仓间调拨单
     * @param $param
     * @return mixed
     */
    public function ECLPAddOutsideMain($param) {
        return $this->call_jd_function('jingdong.eclp.ib.addOutsideMain', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.ib.cancelOutsideMain      取消仓间调拨单
     * @param $param
     * @return mixed
     */
    public function ECLPCancelOutsideMain($param) {
        return $this->call_jd_function('jingdong.eclp.ib.cancelOutsideMain', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.ib.queryOutsideMain      查询仓间调拨单
     * @param $param
     * @return mixed
     */
    public function ECLPGetOutsideMain($param) {
        return $this->call_jd_function('jingdong.eclp.ib.queryOutsideMain', $param);
    }

    /**
     * 普通 基础 jingdong.eclp.rtw.rejectorderinfo      拒收订单入库信息接口
     * @param $param
     * @return mixed
     */
    public function ECLPSearchRejectOrder($param) {
        return $this->call_jd_function('jingdong.eclp.rtw.rejectorderinfo', $param);
    }

}