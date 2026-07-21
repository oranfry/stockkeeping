<?php

namespace OranFry\StockKeeping\Linetypes;

class Disposal extends Event
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_disposal';

        $this->children = [
            (object) [
                'property' => 'transfers',
                'linetype' => 'disposaltransfer',
                'tablelink' => 'disposal_disposaltransfer',
                'only_parent' => 'event_id',
                'cascade_delete' => true,
            ],
        ];
    }
}
