<?php
/**
 * JingDong Warehouse Interface.
 */

namespace hVenus\JingdongAPI;


interface JingDongWarehouseInterface
{
    /**
     * 采购入库单
     * @param $erp_order_id
     * @return mixed
     */
    public function AddEntryWarehouseOrder($erp_order_id);

    /**
     * 取消采购入库单
     * @param $entry_warehouse_order_id
     * @return mixed
     */
    public function CancelEntryWarehouseOrder($entry_warehouse_order_id);

    /**
     * 仓库销售出库单
     * @param $params
     * @return mixed
     */
    public function AddWarehouseSalesOrder($params);

    /**
     * 取消销售出库订单
     * @param $salses_order
     * @return mixed
     */
    public function CancelWarehouseSalesOrder($salses_order);

    /**
     * 添加商品信息
     * @param $goods_id
     * @return mixed
     */
    public function AddGoodsInfoToWarehouse($goods_id);
}