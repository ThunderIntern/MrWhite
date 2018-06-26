<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_link_catalog extends Model
{
  protected $table = 'link_catalog';
  protected $fillable = ['id_link', 'tag', 'link'];
  public $incrementing = false;
  public $timestamps = false;
	public function model_catalog(){
		return $this->belongsTo(model_catalog::class);
	}
}
