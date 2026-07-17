<?php

namespace OranFry\StockKeeping\Report;

class StockPurchase extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['purchasetransfer'];
    }
}