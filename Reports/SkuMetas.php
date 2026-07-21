<?php

namespace OranFry\StockKeeping\Reports;

class SkuMetas extends \OranFry\Jars\Core\Report
{
    function __construct()
    {
        $this->listen = ['skumeta'];
        $this->sorter = fn ($a, $b) => $a->sku <=> $b->sku;
    }
}