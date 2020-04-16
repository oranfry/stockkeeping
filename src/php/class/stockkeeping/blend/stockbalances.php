<?php
namespace stockkeeping\blend;

class stockbalances extends \Blend
{
    public function __construct()
    {
        $this->label = 'Balances';
        $this->linetypes = ['stocktransfer'];
        $this->showass = ['summaries'];
        $this->groupby = 'sku';
        $this->past = true;
        $this->cum = false;
        $this->fields = [
            (object) [
                'name' => 'date',
                'type' => 'date',
                'main' => true,
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
                'groupable' => true,
            ],
            (object) [
                'name' => 'amount',
                'type' => 'number',
                'summary' => 'sum',
            ],
        ];
    }
}
