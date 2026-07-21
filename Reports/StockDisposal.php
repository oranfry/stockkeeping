<?php

namespace OranFry\StockKeeping\Reports;

class StockDisposal extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['disposaltransfer'];
    }
}