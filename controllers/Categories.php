<?php namespace IceFox\Service\Controllers;

use BackendMenu, Lang;
use Backend\Classes\Controller;


/**
 * Categories Back-end Controller
 */
class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'

    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('IceFox.Service', 'service', 'categories');
    }
}
