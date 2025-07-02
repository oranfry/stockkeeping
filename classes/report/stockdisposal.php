<?php

namespace stockkeeping\report;

class stockdisposal extends stock
{
    function __construct()
    {
        parent::__construct();

        $this->listen = ['disposaltransfer'];
    }
}