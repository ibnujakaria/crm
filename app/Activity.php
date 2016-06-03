<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  public function oportunity()
  {
    return $this->belongsTo('App\Oportunity');
  }

  public function getBiayaManusiaAttribute()
  {
    return "Rp. " . number_format($this->biaya);
  }
}
