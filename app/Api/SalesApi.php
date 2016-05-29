<?php
namespace App\Api;

use App\Sales;

/**
 * kelas untuk berinteraksi dengan table sales
 */
class SalesApi
{

  public function insert(array $values)
  {
    $values = (object) $values;
    $sales = new Sales;
    $sales->nama = $values->nama;
    $sales->email = $values->email;
    $sales->password = bcrypt($sales->password);
    $sales->alamat = $values->alamat;
    $sales->status_perkawinan = $values->status_perkawinan;
    $sales->jenis_kelamin = $values->jenis_kelamin;
    $sales->save();
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Sales::all();
    }
    return Sales::paginate($rowPerPage);
  }
}
