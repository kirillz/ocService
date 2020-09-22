<?php namespace IceFox\Service\Models;

use Model;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'icefox_service_categories';

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];


 
}
