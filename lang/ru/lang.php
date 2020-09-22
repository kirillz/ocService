<?php

    return [

        'plugin' => [
            'name'        => 'ocServices',
            'description' => 'Простой каталог услуг'
        ],

        'menu' => [
            'label'    => 'ocServices',
            'services'  => ['label' => 'Услуги'],
            'exports'  => ['label' => 'Экспорт'],
            'settings' => 'Настройки плагина',
        ],

        'controllers' => [
            'categories' => [
                'title'      => 'Категории',
                'create_category' => 'Создание категории',
                'edit_category' => 'Изменение категории',
                'preview_category' => 'Просмотр категории',
                'columns'    => [
                    'id'         => 'ID записи',
                    'group'      => 'Группа',
                    'ip'         => 'IP адрес',
                    'form_data'  => 'Поля формы',
                    'files'      => 'Прикрепленные файлы',
                    'created_at' => 'Создано',
                ],
                'buttons' => [
                    'save'       => 'Сохранить',
                    'save_close'     => 'Соранить и закрыть',
                    'cancel' => 'Отмена',
                ],
                'toolbar' => [
                    'new_category' => "Новая категория",
                    'del_selected' => 'Удалить выбранное',
                ],
            ],
            'items' => [
                'title'      => 'Услуги',
                'create_service' => 'Создать услугу',
                'edit_service' => 'Изменить услугу',
                'del_selected' => 'Удалить выбранное',
                'edit_service' => 'Изменение услуги',
                'import' => 'Импортировать',
                'export' => 'Экспортировать',
            ],
        ],

        'settings' => [

            'plugin_help' => 'Вы можете получить доступ к документации по плагину в GitHub:',
        ],

        'permissions' => [
            'tab'             => 'ocServices',
            'access_records'  => 'Доступ к записям форм',
            'access_exports'  => 'Доступ к экспорту записей',
            'access_settings' => 'Доступ к настройкам модуля',
        ],


    ];

?>
