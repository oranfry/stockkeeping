<?php

namespace OranFry\StockKeeping\Linetype;

class AdjustmentTransfer extends StockTransfer
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

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