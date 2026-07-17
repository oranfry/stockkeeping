<?php

namespace OranFry\StockKeeping\Report;

class Stock extends \OranFry\Jars\Core\Report
{
    function __construct()
    {
        $this->listen = [
            'adjustmenttransfer',
            'consumptiontransfer',
            'disposaltransfer',
            'purchasetransfer',
        ];

        $this->classify = fn ($line) => [$line->date];
        $this->sorter = fn ($a, $b) => $a->date <=> $b->date;
    }
}
