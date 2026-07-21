<?php

namespace OranFry\StockKeeping\Linetypes;

class DisposalTransfer extends StockTransfer
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_disposal';

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'disposal',
                'tablelink' => 'disposal_disposaltransfer',
                'reverse' => true,
                'orphanable' => true,
            ],
        ];
    }
}