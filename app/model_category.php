<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_category extends Model
{
  protected $table = 'category';
  protected $fillable = ['id_category', 'name', 'jenis', 'parent_id'];
  public $incrementing = false;
  public $timestamps = false;
  public function model_catalog(){
  	return $this->belongsToMany('App\model_catalog');
  }
}
