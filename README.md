# Jingdong-api
京东接口

> 本接口基于京东宙斯系统所提供API创建，请以宙斯系统为准，本程序若未及时更新，敬请详解。

## 安装

composer require hvenus/Jingdong-api

## 使用


```php

// 创建实例
$jd = new JD();

// 设置系统参数
$jd->setConfig([
    'AppKey' => 'YOUR_APP_KEY',
    'AppSecret' => 'YOUR_APP_SECRET',
    'Url' => 'https://api.jd.com',
    'Uri' => 'routerjson',
    'Version' => '2.0',
    'Format' => 'json',
    'deptNos' => '事业部编号',
]);

// 设置应用参数
$jd->setParams([
    'access_token' => 'YOUR_ACCESS_TOKEN'
]);

// 获取京东快递运单号
$jd->ExpressGetWaybillCode([
    'preNum' => 1,
    'customerCode' => '商家编码',
    'orderType' => 0
]);

// 返回值(JSON)：
{
    "jingdong_etms_waybillcode_get_responce": {
        "resultInfo": {
            "message": "成功",
            "code": "100",
            "deliveryIdList": [
                {
                    "deliveryIdList": "这里是快递号"
                }
            ]
        }
    }
}


```

## 注意:

以上面示例为例。

京东的接口文档里返回值写明是 "jingdong_etms_waybillcode_get_response"，可实际返回的是"jingdong_etms_waybillcode_get_responce"，"response"拼成了"responce"。

京东所有接口的返回值里 "response" 都拼成了 "responce"。

别问我怎么知道的！！！


## 已完成接口

* ADDRESS 京东地址库API
* ECLP ECLP仓海API
* EXPRESS 京东快递API
* CATEGORY 类目API
* DSP 京准通-快车API
* SHOP 店铺API



## License

MIT