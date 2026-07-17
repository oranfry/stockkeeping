<?php

namespace OranFry\StockKeeping\Report;

class StockAdjustment extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['adjustmenttransfer'];
    }
}