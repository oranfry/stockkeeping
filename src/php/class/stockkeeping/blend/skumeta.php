<?php
namespace stockkeeping\blend;

class skumeta extends \Blend
{
    public $label = 'SKUs';
    public $printable = true;
    public $linetypes = ['skumeta'];

    public function __construct()
    {
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
            ],
            (object) [
                'name' => 'title',
                'type' => 'text',
                'sacrifice' => true,
            ],
        ];
    }
}
