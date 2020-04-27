<?php
namespace stockkeeping\blend;

class stocktransfers extends \Blend
{
    public function __construct()
    {
        $this->label = 'Transfers';
        $this->linetypes = ['stocktransfer'];
        $this->past = true;
        $this->cum = "sku";
        $this->showass = ['list', 'graph'];
        $this->graphfield = 'amount';
        $this->groupby = 'date';
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
            ],
            (object) [
                'name' => 'date',
                'type' => 'date',
                'groupable' => true,
                'main' => true,
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
            ],
            (object) [
                'name' => 'amount',
                'type' => 'number',
                'summary' => 'sum',
                'summary_if' => 'sku',
            ],
            (object) [
                'name' => 'sort',
                'type' => 'text',
                'sacrifice' => true,
            ],
        ];
    }
}
