<?php

namespace OranFry\StockKeeping\Reports;

class StockPurchase extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['purchasetransfer'];
    }
}