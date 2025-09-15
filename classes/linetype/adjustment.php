<?php

namespace stockkeeping\linetype;

class adjustment extends event
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stockevent_adjustment';

        $this->children = [
            (object) [
                'property' => 'transfers',
                'linetype' => 'adjustmenttransfer',
                'tablelink' => 'adjustment_adjustmenttransfer',
                'only_parent' => 'event_id',
                'cascade_delete' => true,
            ],
        ];
    }
}
