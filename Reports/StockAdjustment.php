<?php

namespace OranFry\StockKeeping\Reports;

class StockAdjustment extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['adjustmenttransfer'];
    }
}