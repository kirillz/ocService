<?php namespace IceFox\Service\Components;

use Cms\Classes\ComponentBase;

class Item extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент Услуги',
            'description' => 'Выводит одну услугу'
        ];
    }

    public function defineProperties()
    {
        return [
            'slugCategory' => [
                'title'       => 'Ссылка категории',
                'default'     => '{{ :category }}',
            ],
            'slugItem' => [
                'title'       => 'Ссылка услуги',
                'default'     => '{{ :item }}',
            ]
        ];
    }
    public function onRun()
    {
        $category = \IceFox\Service\Models\Category::where('slug', $this->property('slugCategory'))->first();

        if (empty($category)){
            return $this->controller->run('404');
        }

        $item = \IceFox\Service\Models\Item::where('category_id', $category->id)->where('slug', $this->property('slugItem'))->first();

        if (empty($item)){
            return $this->controller->run('404');
        }

        $this->page['item'] = $item;
    }

    public function onEnd()
    {
        $this->page->title = $this->item->name; // Либо $this->page['title'] точно не помню.
    }
}
