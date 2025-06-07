<?php

namespace stockkeeping\report;

class skumetas extends \jars\Report
{
    function __construct()
    {
        $this->listen = ['skumeta'];
        $this->sorter = fn ($a, $b) => $a->sku <=> $b->sku;
    }
}