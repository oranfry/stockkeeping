<?php

namespace stockkeeping\linetype;

class disposal extends event
{
    use \simplefields\traits\SimpleFields;

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
