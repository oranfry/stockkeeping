<?php

namespace OranFry\StockKeeping\Reports;

class StockConsumption extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['consumptiontransfer'];
    }
}