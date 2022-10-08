<?php namespace Adrian\Hook;

use Backend;
use System\Classes\PluginBase;
use Adrian\Arrivallogger\Models\Arrivallogger as ArrivalloggerModel;
use Adrian\Arrivallogger\Controllers\Arrivallogger as ArrivalloggerControllers;

/**
 * Hook Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['Adrian.Arrivallogger'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Hook',
            'description' => 'No description provided yet...',
            'author'      => 'Adrian',
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
        ArrivalloggerModel::extend(function($model){
            $model->hasOne['hook'] = ['Adrian\Hook\Models\Hook'];
        });

        ArrivalloggerControllers::extendFormFields(function($form){

            $form->addTabFields([
                'hook[desc]' => [
                    'label' => 'Desc',
                    'type' => 'textarea',
                ],
                'hook[skills]' => [
                    'label' => 'Skills',
                    'type' => 'textarea',
                ],
            ]);
        });

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
            'Adrian\Hook\Components\MyComponent' => 'myComponent',
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
            'adrian.hook.some_permission' => [
                'tab' => 'Hook',
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
            'hook' => [
                'label'       => 'Hook',
                'url'         => Backend::url('adrian/hook/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adrian.hook.*'],
                'order'       => 500,
            ],
        ];
    }
}