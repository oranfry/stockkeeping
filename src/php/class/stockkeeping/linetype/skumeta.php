<?php
namespace stockkeeping\linetype;

class skumeta extends \Linetype
{
    public function __construct()
    {
        $this->table = 'skumeta';
        $this->label = 'tag';
        $this->label = 'Sku Meta';
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
                'fuse' => "'tag'",
                'derived' => true,
            ],
            (object) [
                'name' => 'sku',
                'type' => 'text',
                'fuse' => '{t}.sku',
            ],
            (object) [
                'name' => 'title',
                'type' => 'text',
                'fuse' => '{t}.title',
                'sacrifice' => true,
            ],
            (object) [
                "name" => "description",
                "type" => "text",
                'fuse' => '{t}.description',
                'hide' => true,
            ],
            (object) [
                "name" => "value",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.value',
                'hide' => true,
            ],
            (object) [
                "name" => "unit",
                "type" => "text",
                'fuse' => '{t}.unit',
                'hide' => true,
            ],
            (object) [
                "name" => "shelflife",
                "type" => "number",
                'fuse' => '{t}.shelflife',
                'hide' => true,
            ],
            (object) [
                "name" => "gramsperunit",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.gramsperunit',
                'hide' => true,
            ],
            (object) [
                "name" => "ontap",
                "type" => "number",
                'fuse' => '{t}.ontap',
                'hide' => true,
            ],
            (object) [
                "name" => "countfrequency",
                "type" => "text",
                'fuse' => '{t}.countfrequency',
                'hide' => true,
            ],
            (object) [
                "name" => "buyfrequency",
                "type" => "text",
                'fuse' => '{t}.buyfrequency',
                'hide' => true,
            ],
            (object) [
                "name" => "buyquantity",
                "type" => "number",
                'fuse' => '{t}.buyquantity',
                'hide' => true,
            ],
            (object) [
                "name" => "buylocation",
                "type" => "text",
                'fuse' => '{t}.buylocation',
                'hide' => true,
            ],
            (object) [
                "name" => "consumption",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.consumption',
                'hide' => true,
            ],
            (object) [
                "name" => "consumptionperiod",
                "type" => "text",
                'fuse' => '{t}.consumptionperiod',
                'hide' => true,
            ],
            (object) [
                "name" => "energy",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.energy',
                'hide' => true,
            ],
            (object) [
                "name" => "protein",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.protein',
                'hide' => true,
            ],
            (object) [
                "name" => "fattotal",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.fattotal',
                'hide' => true,
            ],
            (object) [
                "name" => "fatsaturated",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.fatsaturated',
                'hide' => true,
            ],
            (object) [
                "name" => "carbohydratetotal",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.carbohydratetotal',
                'hide' => true,
            ],
            (object) [
                "name" => "carbohydratesugar",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.carbohydratesugar',
                'hide' => true,
            ],
            (object) [
                "name" => "sodium",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.sodium',
                'hide' => true,
            ],
            (object) [
                "name" => "potassium",
                "type" => "number",
                "dp" => 8,
                'fuse' => '{t}.potassium',
                'hide' => true,
            ],
       ];
        $this->unfuse_fields = [
            '{t}.sku' => ':{t}_sku',
            '{t}.title' => ':{t}_title',
            '{t}.description' => ':{t}_description',
            '{t}.value' => ':{t}_value',
            '{t}.unit' => ':{t}_unit',
            '{t}.shelflife' => ':{t}_shelflife',
            '{t}.gramsperunit' => ':{t}_gramsperunit',
            '{t}.ontap' => ':{t}_ontap',
            '{t}.countfrequency' => ':{t}_countfrequency',
            '{t}.buyfrequency' => ':{t}_buyfrequency',
            '{t}.buyquantity' => ':{t}_buyquantity',
            '{t}.buylocation' => ':{t}_buylocation',
            '{t}.consumption' => ':{t}_consumption',
            '{t}.consumptionperiod' => ':{t}_consumptionperiod',
            '{t}.energy' => ':{t}_energy',
            '{t}.protein' => ':{t}_protein',
            '{t}.fattotal' => ':{t}_fattotal',
            '{t}.fatsaturated' => ':{t}_fatsaturated',
            '{t}.carbohydratetotal' => ':{t}_carbohydratetotal',
            '{t}.carbohydratesugar' => ':{t}_carbohydratesugar',
            '{t}.sodium' => ':{t}_sodium',
            '{t}.potassium' => ':{t}_potassium',
        ];
    }

    public function validate($line)
    {
        $errors = [];

        if ($line->sku == null) {
            $errors[] = 'no sku ' . var_export($line, 1);
        }

        return $errors;
    }
}
