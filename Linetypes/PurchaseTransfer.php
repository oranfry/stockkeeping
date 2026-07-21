<?php

namespace OranFry\StockKeeping\Linetypes;

class PurchaseTransfer extends StockTransfer
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_purchase';

        $this->simple_number('price', 2);

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'purchase',
                'tablelink' => 'purchase_purchasetransfer',
                'reverse' => true,
                'orphanable' => true,
            ],
        ];
    }
}