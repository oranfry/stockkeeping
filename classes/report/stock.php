<?php

namespace stockkeeping\report;

class stock extends \jars\Report
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
