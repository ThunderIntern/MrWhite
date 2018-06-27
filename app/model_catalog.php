<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_catalog extends Model
{
    protected $table = 'catalog';
  protected $fillable = ['id_catalog', 'barcode', 'deskripsi', 'url_gambar'];
  public $incrementing = false;
  public $timestamps = false;
  
  public function model_category(){
  	return $this->belongsToMany('App\model_category');
  }

  // public function presentPrice(){
  // 	return money_format($%i, $this->harga/100)
  // }
}