<?php
namespace App\Api;

use App\Source;

class CustomersApi extends SourceApi
{

  public function insert(array $values, $status = 'customer')
  {
    parent::insert($values, 'customer');
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Source::customers()->get();
    }
    return Source::customers()->paginate($rowPerPage);
  }
}
