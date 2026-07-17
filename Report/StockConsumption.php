<?php

namespace OranFry\StockKeeping\Report;

class StockConsumption extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['consumptiontransfer'];
    }
}