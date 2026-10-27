<?php

namespace OranFry\StockKeeping\Linetypes;

class Purchase extends Event
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_purchase';

        $this->simple_string('shop');
        $this->simple_string('category');
        $this->borrow['comment'] = fn ($line): string => implode(' - ' . array_filter([$line->shop ?? '', $line->category ?? '']));

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
