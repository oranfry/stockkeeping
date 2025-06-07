<?php

namespace stockkeeping\linetype;

class event extends \jars\Linetype
{
    use \simplefields\traits\SimpleFields;

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
