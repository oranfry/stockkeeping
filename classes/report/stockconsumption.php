<?php

namespace stockkeeping\report;

class stockconsumption extends stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['consumptiontransfer'];
    }
}