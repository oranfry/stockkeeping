<?php

namespace OranFry\StockKeeping\Report;

class StockDisposal extends Stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['disposaltransfer'];
    }
}