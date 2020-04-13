<?php
namespace package;

class stockkeeping extends \Package
{
    public $label = 'Stockkeeping';
    public $blends = [
        'stocktransfers',
        'stockbalances',
        'skumeta',
    ];
}
