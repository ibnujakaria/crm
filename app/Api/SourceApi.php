<?php
namespace App\Api;

class SourceApi {

  public function insert(array $values, $status)
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
    $source->status = $status;
    $source->jenis_kelamin = $values->jenis_kelamin;
    $source->save();
  }
}
