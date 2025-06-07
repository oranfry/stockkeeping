<?php

namespace stockkeeping\linetype;

class purchase extends event
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_purchase';

        $this->simple_string('shop');
        $this->borrow['comment'] = fn ($line): string => $line->shop;

        $this->children = [
            (object) [
                'property' => 'transfers',
                'linetype' => 'purchasetransfer',
                'tablelink' => 'purchase_purchasetransfer',
                'only_parent' => 'event_id',
            ],
        ];
    }
}
