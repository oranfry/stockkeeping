<?php
namespace stockkeeping\linetype;

class stocktransfer extends \Linetype
{
    public function __construct()
    {
        $this->name = 'stocktransfer';
        $this->label = 'Stock Transfer';
        $this->icon = 'box';
        $this->table = 'stocktransfer';
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
                'fuse' => "'box'",
                'derived' => true,
            ],
            (object) [
                'name' => 'date',
                'type' => 'date',
                'groupable' => true,
                'fuse' => '{t}.date',
                'main' => true,
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
                'groupable' => true,
                'fuse' => '{t}.sku',
            ],
            (object) [
                'name' => 'amount',
                'type' => 'number',
                'summary' => 'sum',
                'fuse' => '{t}.amount',
            ],
            (object) [
                'name' => 'price',
                'type' => 'number',
                'dp' => 2,
                'fuse' => '{t}.price',
                'summary' => 'sum',
            ],
            (object) [
                'name' => 'sort',
                'type' => 'text',
                'fuse' => '{t}.sort',
                'sacrifice' => true,
            ],
        ];
        $this->unfuse_fields = [
            '{t}.date' => ':{t}_date',
            '{t}.sku' => ':{t}_sku',
            '{t}.amount' => ':{t}_amount',
            '{t}.price' => ':{t}_price',
            '{t}.sort' => ':{t}_sort',
        ];
    }

    public function get_suggested_values($token)
    {
        $suggested_values = [];

        $suggested_values['sku'] = get_values($token, 'skumeta', 'sku');

        return $suggested_values;
    }

    public function validate($line)
    {
        $errors = [];

        if ($line->date == null) {
            $errors[] = 'no date';
        }

        if ($line->sku == null) {
            $errors[] = 'no sku';
        }

        if ($line->amount == null) {
            $errors[] = 'no amount';
        }

        return $errors;
    }
}
