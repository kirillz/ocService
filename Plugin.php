<?php 

    namespace IceFox\Service;

    use Backend, Lang;
    use System\Classes\PluginBase;
    
    use System\Classes\SettingsManager;
    use Icefox\Service\Models\Settings;

/**
 * Service Plugin Information File
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
            'name'        => 'icefox.service::lang.plugin.name',
            'description' => 'icefox.service::lang.plugin.description',
            'author'      => 'Засорин Кирилл (IceFox)',
            'icon'        => 'icon-leaf',
            'homepage'    => 'https://github.com/kirillz/'
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
        

        return [
            'IceFox\Service\Components\Catalog'  => 'IcefoxCatalog',
            'IceFox\Service\Components\Category' => 'IcefoxCategory',
            'IceFox\Service\Components\Item'     => 'IcefoxItem',
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
            'icefox.service.some_permission' => [
                'tab' => 'Service',
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
        // return []; // Remove this line to activate

        return [
            'service' => [
                'label'       => 'Услуги',
                'url'         => Backend::url('icefox/service/items'),
                'icon'        => 'icon-leaf',
                'permissions' => ['icefox.service.*'],
                'order'       => 500,
                'sideMenu' => [
                    'items' => [
                        'label'       => 'Услуги',
                        'url'         => Backend::url('icefox/service/items'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['icefox.service.*'],
                        'order'       => 500,
                    ],
                    'categories' => [
                        'label'       => 'Категории',
                        'url'         => Backend::url('icefox/service/categories'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['icefox.service.*'],
                        'order'       => 500,
                    ],
                ]
            ],
        ];
    }
    
    public function registerSettings() {
        return [
            'config' => [
                'label'       => 'icefox.service::lang.menu.label',
                'description' => 'icefox.service::lang.menu.settings',
                'category'    => SettingsManager::CATEGORY_CMS,
                'icon'        => 'icon-leaf',
                'class'       => 'Icefox\Service\Models\Settings',
                'permissions' => ['icefox.service.access_settings'],
                'order'       => 500
            ]
        ];
    }
}
