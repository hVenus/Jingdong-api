<?php
/**
 * 核心基类.
 */

namespace hVenus\JingdongAPI\Core;


class BaseClass
{
    use HttpBase;

    public $db;
    public $config;
    public $params;

    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

    /**
     * @param $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }


}