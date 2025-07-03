<?php

namespace stockkeeping\linetype;

class adjustmenttransfer extends stocktransfer
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_adjustment';

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'adjustment',
                'tablelink' => 'adjustment_adjustmenttransfer',
                'reverse' => true,
                'orphanable' => true,
            ],
        ];
    }
}