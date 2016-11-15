<?php namespace Mesadev\Inventory\Components;

use Cms\Classes\ComponentBase;

class Listing extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Listing Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'category' => [
                'title'             => 'Category',
                'type'              => 'dropdown',
                'default'           => 'Jets'
            ],
            'items' => [
                'title'             => 'Items',
                'type'              => 'dropdown',
                'default'           => '204',
                'depends'           => ['category'],
                'placeholder'       => 'Select an item'
            ]
        ];
    }

}