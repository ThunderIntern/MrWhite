<?php

namespace App;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    
	use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'catalogs.nama' => 10,
            'catalogs.deskripsi' => 10,
            // 'categories.jenis' => 10,
            'categories.name' => 10,
        ],
        'joins' => [
            'catalog_category' => ['catalog_category.catalog_id','catalogs.id'],
            'categories' => ['categories.id','catalog_category.category_id'],
        ],
    ];

    public function categories(){
  	return $this->belongsToMany('App\Category');
  }
}
