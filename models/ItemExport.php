<?php namespace IceFox\Service\Models;

use Model;

class ItemExport extends Model
{
    use \October\Rain\Database\Traits\Validation;
   
    /**
     * @var string The database table used by the model.
     */
    
    public $table = 'icefox_service_items';

    /**
     * @var array Validation rules
     */
    
    public $rules = [
    ];
}