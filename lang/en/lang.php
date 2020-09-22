<?php

    return [

        'plugin' => [
            'name'        => 'ocServices',
            'description' => 'Lightweight catalog of services'
        ],

        'menu' => [
            'label'    => 'ocServices',
            'services'  => ['label' => 'Services'],
            'exports'  => ['label' => 'Export'],
            'settings' => 'Plugin settings',
        ],

        'controllers' => [
            'categories' => [
                'title'      => 'Categories',
                'create_category' => 'Create category',
                'edit_category' => 'Edit category',
                'preview_category' => 'Preview category',
                
                'buttons' => [
                    'save'       => 'Save',
                    'save_close'     => 'Save and close',
                    'cancel' => 'Cancel',
                ],
                'toolbar' => [
                    'new_category' => "New category",
                    'del_selected' => 'Delete selected',
                ],
            ],
            'items' => [
                'title'      => 'Services',
                'create_service' => 'Create service',
                'edit_service' => 'Edit service',
                'del_selected' => 'Delete service',
                'import' => 'Import',
                'export' => 'Export',
                'buttons' => [
                    'save'       => 'Save',
                    'save_close'     => 'Save and close',
                    'cancel' => 'Cancel',
                    ],
            ],
        ],

        'settings' => [

            'plugin_help' => 'You may view plugin documentation on GitHub:',
        ],

        'permissions' => [
            'tab'             => 'ocServices',
            'access_records'  => 'Access to records',
            'access_exports'  => 'Access to export records',
            'access_settings' => 'Access to plugin settings',
        ],


    ];

?>
