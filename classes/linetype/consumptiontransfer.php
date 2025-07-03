<?php

namespace stockkeeping\linetype;

class consumptiontransfer extends stocktransfer
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'stocktransfer_consumption';

        $this->inlinelinks = [
            (object) [
                'property' => 'event',
                'linetype' => 'consumption',
                'tablelink' => 'consumption_consumptiontransfer',
                'reverse' => true,
                'orphanable' => true,
            ],
        ];
    }
}