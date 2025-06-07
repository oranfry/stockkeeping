<?php

namespace stockkeeping\report;

class stockdelta extends \jars\Report
{
    public function __construct()
    {
        $this->listen = ['report:stock'];
        $this->classify = fn ($groupname) => [$groupname];
    }

    public function handle($group): ?object
    {
        $delta = [];

        foreach ($group as $line) {
            $delta[$line->sku] = ($delta[$line->sku] ?? 0) + $line->amount;

            if (!$delta[$line->sku]) {
                unset($delta[$line->sku]);
            }
        }

        return (object) $delta;
    }
}
