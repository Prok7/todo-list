<?php namespace Jozef\TodoList;

use Backend;
use System\Classes\PluginBase;

/**
 * TodoList Plugin Information File
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
            'name'        => 'TodoList',
            'description' => 'No description provided yet...',
            'author'      => 'Jozef',
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
        return []; // Remove this line to activate

        return [
            'Jozef\TodoList\Components\MyComponent' => 'myComponent',
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
            'jozef.todolist.some_permission' => [
                'tab' => 'TodoList',
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

        return [
            'todolist' => [
                'label'       => 'TodoList',
                'url'         => Backend::url('jozef/todolist/users'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jozef.todolist.*'],
                'order'       => 500,
                "sideMenu"    => [
                    "users" => [
                        'label'       => 'Users',
                        'url'         => Backend::url('jozef/todolist/users'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['jozef.todolist.*'],
                        'order'       => 500
                    ],
                    "notes" => [
                        'label'       => 'Notes',
                        'url'         => Backend::url('jozef/todolist/notes'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['jozef.todolist.*'],
                        'order'       => 500,
                    ]
                ]
            ],
        ];
    }
}
