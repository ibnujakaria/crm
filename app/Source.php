<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
  public function scopeLeads($query)
  {
    return $query->where('status', 'leads');
  }

  public function scopeCustomers($query)
  {
    return $query->where('status', 'customer');
  }

  public function scopeDesc($query)
  {
    return $query->orderby('id', 'desc');
  }
}
