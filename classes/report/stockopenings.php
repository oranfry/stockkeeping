<?php

namespace stockkeeping\report;

class stockopenings extends \jars\Report
{
    public function __construct()
    {
        $this->listen = ['report:stockdelta'];
        $this->classify = fn ($groupname) => ['months'];
    }

    public function handle($data, $report, string $change_reportname, string $change_groupname): array
    {
        $data = (object) ($data ?? []);
        $report = (array) ($report ?? []);

        foreach (get_object_vars($data) as $sku => $amount) {
            if (!$amount === null) {
                unset($report[$change_groupname]->$sku);
            } else {
                if (!isset($report[$change_groupname])) {
                    $report[$change_groupname] = (object) [];
                }

                $report[$change_groupname]->$sku = (object) [
                    'delta' => $amount,
                ];
            }
        }

        ksort($report);

        foreach ($report as $group => $data) {
            $data = (array) $data;
            ksort($data);
            $report[$group] = (object) $data;
        }

        $balances = [];

        foreach ($report as $group => $data) {
            foreach ($data as $sku => $amount) {
                $balances[$sku] ??= 0;

                $report[$group]->$sku->opening = $balances[$sku];
                $balances[$sku] = $balances[$sku] + $report[$group]->$sku->delta;
                $report[$group]->$sku->closing = $balances[$sku];
            }
        }

        return $report;
    }
}
