<?php

namespace stockkeeping\report;

class stockevents extends \jars\Report
{
    function __construct()
    {
        $this->classify = fn ($line) => [substr($line->date, 0, 7)];
        $this->listen = [
            'adjustment' => (object) ['children' => ['transfers']],
            'consumption' => (object) ['children' => ['transfers']],
            'disposal' => (object) ['children' => ['transfers']],
            'purchase' => (object) ['children' => ['transfers']],
        ];
        $this->sorter = fn ($a, $b) => $a->date <=> $b->date;
    }
}