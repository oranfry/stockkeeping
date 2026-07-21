<?php

namespace OranFry\StockKeeping\Linetypes;

class Event extends \OranFry\Jars\Core\Linetype
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->simple_date('date');
    }

    public function validate($line): array
    {
        $errors = parent::validate($line);

        if ($line->date === null) {
            $errors[] = 'no date';
        }

        return $errors;
    }
}
