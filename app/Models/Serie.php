<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

  protected $fillable = [
    'name'
  ];

  public $timestamps = false;

  public function episodes()
  {
    return $this->hasMany(Episode::class);
  }

}