<?php
namespace App\Api;

use App\Source;
/**
 * Kelas ini digunakan untuk berinteraksi dengan table leads
 */
class LeadsApi extends SourceApi
{

  public function insert(array $values, $status = 'leads')
  {
    parent::insert($values, 'leads');
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Source::leads()->get();
    }
    return Source::leads()->paginate($rowPerPage);
  }
}
