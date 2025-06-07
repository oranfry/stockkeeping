<?php

namespace stockkeeping\linetype;

class purchasetransfer extends stocktransfer
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_purchase';

        $this->simple_number('price', 2);

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'purchase',
                'tablelink' => 'purchase_purchasetransfer',
                'reverse' => true,
            ],
        ];
    }
}