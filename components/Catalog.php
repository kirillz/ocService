<?php namespace IceFox\Service\Components;

use Cms\Classes\ComponentBase;

class Catalog extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент каталог услуг',
            'description' => 'Компонент выводит каталог'
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'Количество',
                'description' => 'Определяет количество услуг на одной странице',
                'default'     => '10',
            ],
        ];
    }

    public function onRun()
    {
        $this->page['items'] = \IceFox\Service\Models\Item::paginate($this->property('items'));
        $this->page['categories'] = \IceFox\Service\Models\Category::get();
    }
}
