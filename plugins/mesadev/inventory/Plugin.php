<?php namespace Mesadev\Inventory;

use System\Classes\PluginBase;

/**
 * Inventory Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Inventory',
            'description' => 'MesaDev Inventory Management System',
            'author'      => 'Lester Ariel Mesa',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        //return []; // Remove this line to activate

        return [
            'Mesadev\Inventory\Components\Listing' => 'listing',
            'Mesadev\Inventory\Components\Display' => 'display',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'mesadev.inventory.some_permission' => [
                'tab' => 'Inventory',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'inventory' => [
                'label'       => 'Inventory',
                'url'         => Backend::url('mesadev/inventory/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['mesadev.inventory.*'],
                'order'       => 500,
            ],
        ];
    }

}
