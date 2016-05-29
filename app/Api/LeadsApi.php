<?php
namespace App\Api;

use App\Source;
/**
 * Kelas ini digunakan untuk berinteraksi dengan table leads
 */
class LeadsApi
{

  public function insert(array $values)
  {
    $values = (object) $values;
    $source = new Source;
    $source->nama = $values->nama;
    $source->email = $values->email;
    $source->sumber = $values->sumber;
    $source->nama_perusahaan = $values->nama_perusahaan;
    $source->industri = $values->industri;
    $source->alamat = $values->alamat;
    $source->tanggal_lahir = $values->tanggal_lahir;
    $source->status = "leads";
    $source->jenis_kelamin = $values->jenis_kelamin;
    $source->save();
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Source::all();
    }
    return Source::paginate($rowPerPage);
  }
}
