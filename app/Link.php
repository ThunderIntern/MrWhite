<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function catalogs(){
		return $this->belongsTo('App/Catalog');
	}
}
