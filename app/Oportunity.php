<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunity extends Model
{
  public function product()
  {
    return $this->belongsTo('App\Product');
  }

  public function source()
  {
    return $this->belongsTo('App\Source');
  }

  public function sales()
  {
    return $this->belongsTo('App\Sales');
  }
}
