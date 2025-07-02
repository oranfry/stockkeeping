<?php

namespace stockkeeping\report;

class stockpurchase extends stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['purchasetransfer'];
    }
}