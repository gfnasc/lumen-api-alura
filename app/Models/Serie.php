<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

  protected $fillable = [
    'name'
  ];

  protected $perPage = 5;
  public $timestamps = false;

  public function episodes()
  {
    return $this->hasMany(Episode::class);
  }

}
