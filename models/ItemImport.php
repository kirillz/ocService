<?php namespace IceFox\Service\Models;

use Backend\Models\ImportModel;

class ItemImport extends ImportModel
{
    public $table = 'icefox_service_items';

    /**
     * Обязательные поля
     */
    protected $rules = [
        'name'    => 'required',
        'slug'    => 'required',
    ];

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);

        foreach ($results as $row => $data) {
            try {
                $item = new Item;
                $item->fill($data);
                $item->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}