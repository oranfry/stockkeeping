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
            '{t}.sku' => (object) [
                'expression' => ':{t}_sku',
                'type' => 'varchar(40)',
            ],
            '{t}.title' => (object) [
                'expression' => ':{t}_title',
                'type' => 'varchar(255)',
            ],
            '{t}.description' => (object)[
                'expression' => ':{t}_description',
                'type' => 'varchar(255)',
            ],
            '{t}.value' => (object) [
                'expression' => ':{t}_value',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.unit' => (object) [
                'expression' => ':{t}_unit',
                'type' => 'varchar(20)',
            ],
            '{t}.shelflife' => (object) [
                'expression' => ':{t}_shelflife',
                'type' => 'int',
            ],
            '{t}.gramsperunit' => (object) [
                'expression' => ':{t}_gramsperunit',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.ontap' => (object) [
                'expression' => ':{t}_ontap',
                'type' => 'tinyint',
            ],
            '{t}.countfrequency' => (object) [
                'expression' => ':{t}_countfrequency',
                'type' => 'varchar(10)',
            ],
            '{t}.buyfrequency' => (object) [
                'expression' => ':{t}_buyfrequency',
                'type' => 'varchar(10)',
            ],
            '{t}.buyquantity' => (object) [
                'expression' => ':{t}_buyquantity',
                'type' => 'int',
            ],
            '{t}.buylocation' => (object) [
                'expression' => ':{t}_buylocation',
                'type' => 'varchar(255)',
            ],
            '{t}.consumption' => (object) [
                'expression' => ':{t}_consumption',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.consumptionperiod' => (object) [
                'expression' => ':{t}_consumptionperiod',
                'type' => 'varchar(10)',
            ],
            '{t}.energy' => (object) [
                'expression' => ':{t}_energy',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.protein' => (object) [
                'expression' => ':{t}_protein',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.fattotal' => (object) [
                'expression' => ':{t}_fattotal',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.fatsaturated' => (object) [
                'expression' => ':{t}_fatsaturated',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.carbohydratetotal' => (object) [
                'expression' => ':{t}_carbohydratetotal',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.carbohydratesugar' => (object) [
                'expression' => ':{t}_carbohydratesugar',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.sodium' => (object) [
                'expression' => ':{t}_sodium',
                'type' => 'decimal(32, 16)',
            ],
            '{t}.potassium' => (object) [
                'expression' => ':{t}_potassium',
                'type' => 'decimal(32, 16)',
            ],
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
