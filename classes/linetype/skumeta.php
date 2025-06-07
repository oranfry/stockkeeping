<?php

namespace stockkeeping\linetype;

class skumeta extends \jars\Linetype
{
    use \simplefields\traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'skumeta';

        $this->simple_string('sku');
        $this->simple_string('title');
        $this->simple_string('description');
        $this->simple_string('unit');
        $this->simple_int('shelflife');
        $this->simple_string('countfrequency');
        $this->simple_string('buyfrequency');
        $this->simple_int('buyquantity');
        $this->simple_string('buylocation');
        $this->simple_float('consumption', 16);
        $this->simple_string('consumptionperiod');
    }

    public function validate($line): array
    {
        $errors = parent::validate($line);

        if ($line->sku === null) {
            $errors[] = 'no sku';
        }

        if ($line->unit === null) {
            $errors[] = 'no unit';
        }

        return $errors;
    }
}
