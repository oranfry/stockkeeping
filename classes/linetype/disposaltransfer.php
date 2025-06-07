<?php

namespace stockkeeping\linetype;

class disposaltransfer extends stocktransfer
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_disposal';

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'disposal',
                'tablelink' => 'disposal_disposaltransfer',
                'reverse' => true,
            ],
        ];
    }
}