<?php

namespace stockkeeping\report;

class stock extends \jars\Report
{
    function __construct()
    {
        $this->classify = fn ($line) => [substr($line->date, 0, 7)];
        $this->listen = ['adjustmenttransfer', 'consumptiontransfer', 'disposaltransfer', 'purchasetransfer'];
        $this->sorter = fn ($a, $b) => $a->date <=> $b->date;
    }
}