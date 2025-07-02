<?php

namespace stockkeeping\report;

class stockadjustment extends stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['adjustmenttransfer'];
    }
}