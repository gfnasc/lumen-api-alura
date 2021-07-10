<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model {

  protected $fillable = [
    'season',
    'episode_number',
    'view'
  ];

  public function serie()
  {
    return $this->belongsTo(Serie::class);
  }

}