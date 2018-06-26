<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_banner extends Model
{
    //
  protected $table = 'banner';
  protected $fillable = ['id_banner', 'name', 'url_gambar', 'date_show', 'date_off'];
  public $incrementing = false;
  public $timestamps = false;
}
