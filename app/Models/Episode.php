<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model {

  protected $fillable = [
    'season',
    'episode_number',
    'view',
    'serie_id'
  ];

  public $timestamps = false;

  public function serie()
  {
    return $this->belongsTo(Serie::class);
  }

}