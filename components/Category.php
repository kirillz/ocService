<?php namespace IceFox\Service\Components;

use Cms\Classes\ComponentBase;

class Category extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент Категорий',
            'description' => 'Выводит категории услуг'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Ссылка категории',
                'default'     => '{{ :category }}',
            ],
            'items' => [
                'title'       => 'Количество',
                'description' => 'Определяет количество предметов на одной странице',
                'default'     => '10',
            ],
        ];
    }
    public function onRun()
        {
            $category = \IceFox\Service\Models\Category::where('slug', $this->property('slug'))->first();

            if (empty($category)){
                return $this->controller->run('404');
            }

            $items = \IceFox\Service\Models\Item::where('category_id', $category->id)->paginate($this->property('items'));

            $this->page['category'] = $category;
            $this->page['items']    = $items;
        }
}
