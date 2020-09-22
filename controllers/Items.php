<?php namespace IceFox\Service\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Items Back-end Controller
 */
class Items extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig  = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('IceFox.Service', 'service', 'items');
    }
}
