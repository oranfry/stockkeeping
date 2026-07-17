<?php

namespace OranFry\StockKeeping\Linetype;

abstract class StockTransfer extends \OranFry\Jars\Core\Linetype
{
    use \OranFry\SimpleFields\Traits\SimpleFields;

    public function __construct()
    {
        parent::__construct();

        $this->simple_string('sku');
        $this->simple_int('amount');

        $this->borrow['date'] = fn ($line): string => $line->event->date;
    }

    public function validate($line): array
    {
        $errors = parent::validate($line);

        if ($line->sku === null) {
            $errors[] = 'no sku';
        }

        if ($line->amount === null) {
            $errors[] = 'no amount';
        }

        return $errors;
    }

    public function unpack($line, $oldline, $old_gstird_transactions)
    {
        $line->event = 'unchanged';
    }
}
