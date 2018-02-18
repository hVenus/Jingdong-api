<?php
/**
 * JingDong Express Interface.
 */

namespace hVenus\JingdongAPI;


interface JingDongExpressInterface
{
    /**
     * 下京东快递单
     * @param $params
     * @return mixed
     */
    public function AddExpressOrder($params);

    /**
     * 取消运单
     * @param $params
     * @return mixed
     */
    public function CancelExpressOrder($params);

    /**
     * 获取运单详情
     * @param $params
     * @return mixed
     */
    public function GetExpressOrder($params);

    /**
     * 获取运单路由信息
     * @param $mail_no
     * @return mixed
     */
    public function GetExpressOrderRoute($mail_no);
}