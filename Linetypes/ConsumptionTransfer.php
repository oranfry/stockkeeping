<?php

namespace OranFry\StockKeeping\Linetypes;

class ConsumptionTransfer extends StockTransfer
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_consumption';

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'consumption',
                'tablelink' => 'consumption_consumptiontransfer',
                'reverse' => true,
                'orphanable' => true,
            ],
        ];
    }
}