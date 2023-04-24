<?php

namespace stockkeeping\linetype;

class stocktransfer extends \jars\Linetype
{
    public function __construct()
    {
        $this->table = 'stocktransfer';

        $this->simple_strings('date', 'sku');
        $this->simple_int('amount');
        $this->simple_float('price', 2);
        $this->simple_string('sort');
    }

    public function validate($line)
    {
        $errors = parent::validate($line);

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
