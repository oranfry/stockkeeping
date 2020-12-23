<?php
namespace stockkeeping\blend;

class stocktransfers extends \Blend
{
    public function __construct()
    {
        $this->label = 'Transfers';
        $this->linetypes = ['stocktransfer'];
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
            ],
            (object) [
                'name' => 'date',
                'type' => 'date',
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
            ],
            (object) [
                'name' => 'amount',
                'type' => 'number',
            ],
            (object) [
                'name' => 'sort',
                'type' => 'text',
            ],
        ];
    }
}
