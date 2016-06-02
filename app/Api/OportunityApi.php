<?php
namespace App\Api;

use App\Oportunity;

class OportunityApi {

  public function create(array $values)
  {
    $values = (object) $values;

    $oportunity = new Oportunity;
    $oportunity->sales_id = $values->sales_id;
    $oportunity->source_id = $values->source_id;
    $oportunity->product_id = $values->product_id;
    $oportunity->judul = $values->judul;
    $oportunity->deskripsi = $values->deskripsi;
    $oportunity->jumlah_step = $values->jumlah_step;
    $oportunity->save();
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Oportunity::all();
    }

    return Oportunity::paginate($rowPerPage);
  }
}
