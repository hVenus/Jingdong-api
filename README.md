# Jingdong-api
京东接口

> 本接口基于京东宙斯系统所提供API创建，请以宙斯系统为准，本程序若未及时更新，敬请详解。

## 安装

composer require hvenus/Jingdong-api

## 使用

示例

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

* ACCOUNT 子账号API
* ADDRESS 京东地址库API
* ECLP ECLP仓海API
* EXPRESS 京东快递API
* CATEGORY 类目API
* DSP 京准通-快车API
* SHOP 店铺API
* ORDER 订单API

## 其它

PHP函数不允许以数字开头，所以所有数字开头的前面都多加个“jd_”前缀以示区别.

## 刷新授权Token

京东的授权Token正式环境下是一年的有效期，可以写个定时任务每天去检查下token的过期时间，根据需要来自动刷新。

示例
```php
// 先取出已经获得到授权数据
$auth_time = $config['jd:auth:time']; // token发放时间，单位毫秒
$auth_expires_in = $config['jd:auth:expires_in']; // 有效期时长, 单位秒
$auth_refresh_token = $config['jd:auth:refresh_token']; // refresh_token
$expires_time = $auth_time + $auth_expires_in * 1000; // 计算过期时间，单位毫秒。 token发放时间(毫秒) + 有效期时长(秒) * 1000
$diff = $expires_time/1000 - time(); // 取差值，表示还剩多少秒过期。
$deadline = 60*60*24; // 一天
if ($diff <= $deadline) { // 一天内过期
    // 刷新
    $param = [
      'client_id' => $config['AppKey'],
      'client_secret' => $config['AppSecret'],
      'refresh_token' => $config['refresh_token'],
      'state' => $Something, // 此参数内容原样返回
    ];
    $result = $jd->RefreshToken($param);
    if (false !== $result) {
        // 重新设置新token
        $config['jd:auth:access_token'] = $result['access_token']; // 新access_token
        $config['jd:auth:expires_in'] = $result['expires_in'];
        $config['jd:auth:refresh_token'] = $result['refresh_token']; // 京东文档说refresh_token是不变的。
        $config['jd:auth:time'] = $result['time'];
    }
}
```

## License

MIT