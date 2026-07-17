<?php

namespace OranFry\StockKeeping\Linetype;

class Consumption extends Event
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_consumption';

        $this->children = [
            (object) [
                'property' => 'transfers',
                'linetype' => 'consumptiontransfer',
                'tablelink' => 'consumption_consumptiontransfer',
                'only_parent' => 'event_id',
                'cascade_delete' => true,
            ],
        ];
    }
}
