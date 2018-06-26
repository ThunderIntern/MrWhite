<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_setting_web extends Model
{
  protected $table = 'setting_web';
  protected $fillable = ['id_setting', 'jenis', 'isi'];
  public $incrementing = false;
  public $timestamps = false;
}
