<?php

namespace stockkeeping\linetype;

class skumeta extends \jars\Linetype
{
    public function __construct()
    {
        $this->table = 'skumeta';

        $this->simple_strings('sku');
        $this->simple_string('title');
        $this->simple_string('description');
        $this->simple_float('value', 8);
        $this->simple_string('unit');
        $this->simple_int('shelflife');
        $this->simple_float('gramsperunit', 8);
        $this->simple_boolean('ontap');
        $this->simple_string('countfrequency');
        $this->simple_string('buyfrequency');
        $this->simple_int('buyquantity');
        $this->simple_string('buylocation');
        $this->simple_float('consumption', 16);
        $this->simple_string('consumptionperiod');
        $this->simple_float('energy', 8);
        $this->simple_float('protein', 8);
        $this->simple_float('fattotal', 8);
        $this->simple_float('fatsaturated', 8);
        $this->simple_float('carbohydratetotal', 8);
        $this->simple_float('carbohydratesugar', 8);
        $this->simple_float('sodium', 8);
        $this->simple_float('potassium', 8);
    }

    public function validate($line)
    {
        $errors = parent::validate($line);

        if ($line->sku == null) {
            $errors[] = 'no sku';
        }

        return $errors;
    }
}
