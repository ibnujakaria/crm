<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $appends = ['harga_manusia', 'cover_src'];

  public function getCoverSrcAttribute()
  {
    return url("assets/dist/images/{$this->cover}");
  }

  public function getHargaManusiaAttribute()
  {
    return "Rp. " . number_format($this->harga);
  }
}
