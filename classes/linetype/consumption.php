<?php

namespace stockkeeping\linetype;

class consumption extends event
{
    use \simplefields\traits\SimpleFields;

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
            ],
        ];
    }
}
