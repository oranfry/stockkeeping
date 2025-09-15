<?php

namespace stockkeeping\report;

class skustock extends \jars\Report
{
    function __construct()
    {
        $this->classify = fn ($line) => [str_replace(':', '/', $line->sku)];
        $this->listen = ['adjustmenttransfer', 'consumptiontransfer', 'disposaltransfer', 'purchasetransfer'];
        $this->sorter = fn ($a, $b) => $a->date <=> $b->date;
    }
}