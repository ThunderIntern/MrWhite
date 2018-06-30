<?php

namespace App;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function catalogs(){
	  	return $this->belongsToMany('App\Catalog');
  }
}
