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
            '{t}.date' => (object) [
                'expression' => ':{t}_date',
                'type' => 'date',
            ],
            '{t}.sku' => (object) [
                'expression' => ':{t}_sku',
                'type' => 'varchar(40)',
            ],
            '{t}.amount' => (object) [
                'expression' => ':{t}_amount',
                'type' => 'int',
            ],
            '{t}.price' => (object) [
                'expression' => ':{t}_price',
                'type' => 'decimal(18,2)',
            ],
            '{t}.sort' => (object) [
                'expression' => ':{t}_sort',
                'type' => 'varchar(20)',
            ],
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
