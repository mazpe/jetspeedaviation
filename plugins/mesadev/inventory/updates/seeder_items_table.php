<?php namespace Mesadev\Inventory\Updates;

use Mesadev\Inventory\Models\Items;
use Seeder;

class SeedItemsTable extends Seeder
{
    public function run()
    {
        $item = Item::create([
            'serial'            => '204',
            'year'              => '2008',
            'make'              => 'Gulfstream',
            'model'             => 'G200',
            'registration'      => 'N982MM',
            'description'       => 'Jet Speed Aviation Inc. is pleased to offer Gulfstream G200, Serial Number 204 to the marketplace for immediate sale.',
            'log'               => 'Total Airframe Hours Since New: 5627 - Total Airframe Landings Since New: 3473'
        ]);
    }
}