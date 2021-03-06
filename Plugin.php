<?php namespace Elon\Catalog;

use System\Classes\PluginBase;

/**
 * Elon Catalog Plugin Information File
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Elon Catalog',
            'description' => 'Product catalog.',
            'author'      => 'Trofim Jugastrov, Dolgopolov Denis, Alexander Khramov, Natalia Kosman',
            'icon'        => 'icon-shopping-cart'
        ];
    }

    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'Catalog',
                'url'         => \Backend::url('elon/catalog/productitems'),
                'icon'        => 'icon-shopping-cart',
                'order'       => 500,
                'sideMenu' => [
                    'productitems' => [
                        'label'       => 'Products',
                        'icon'        => 'icon-tags',
                        'url'         => \Backend::url('elon/catalog/productitems'),
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('elon/catalog/categories'),
                    ],
                    'tags' => [
                        'label'       => 'Tags',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('elon/catalog/tags'),
                    ],
                ]
            ]
        ];
    }
    
    public function registerComponents()
    {
        return [
            'Elon\Catalog\Components\ProductList' => 'ProductList',
            'Elon\Catalog\Components\Product' => 'Product',
            'Elon\Catalog\Components\Categories' => 'Categories',
            'Elon\Catalog\Components\Tags' => 'Tags'
        ];
    }

}