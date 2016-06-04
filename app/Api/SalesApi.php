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

  public function update($request, $sales)
  {
    $sales->nama = $request->nama ? $request->nama : $sales->nama;
    $sales->email = $request->email ? $request->email : $sales->email;
    $sales->alamat = $request->alamat ? $request->alamat : $sales->alamat;
    $sales->status_perkawinan = $request->status_perkawinan? $request->status_perkawinan : $sales->status_perkawinan;
    $sales->jenis_kelamin = $request->jenis_kelamin ? $request->jenis_kelamin : $sales->jenis_kelamin;
    $sales->save();

    return $sales;
  }
}
