<?php

namespace OranFry\StockKeeping\Linetype;

class Purchase extends Event
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_purchase';

        $this->simple_string('shop');
        $this->borrow['comment'] = fn ($line): ?string => $line->shop;

        $this->children = [
            (object) [
                'property' => 'transfers',
                'linetype' => 'purchasetransfer',
                'tablelink' => 'purchase_purchasetransfer',
                'only_parent' => 'event_id',
                'cascade_delete' => true,
            ],
        ];
    }
}
