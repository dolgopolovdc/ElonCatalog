<?php namespace Elon\Catalog\Models;

use Model;

/**
 * ProductItem Model
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 * 
 */
class ProductItem extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elon_catalog_product_items';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'categories' => [
            'Elon\Catalog\Models\Category',
            'table' => 'elon_catalog_cat_prod',
            'order' => 'name',
        ],
        'tags' => [
            'Elon\Catalog\Models\Tag',
            'table' => 'elon_catalog_tag_prod',
            'order' => 'name',
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = ['images' => ['System\Models\File']];
    


    public function getSquareThumb($size, $image)
    {
        return $image->getThumb($size, $size, ['mode' => 'crop']);
    }

}