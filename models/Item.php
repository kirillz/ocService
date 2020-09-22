<?php namespace IceFox\Service\Models;

use Model;

/**
 * Item Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'icefox_service_items';

    
    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'category' => ['IceFox\Service\Models\Category']
    ];
    
}
