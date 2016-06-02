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

  public function getById($id)
  {
    return Oportunity::find($id);
  }

  public function getAll()
  {
    return Oportunity::orderby('id', 'desc')->get();
  }

  public function update($id, $request)
  {
    $oportunity = Oportunity::find($id);
    $oportunity->sales_id = $request->sales_id;
    $oportunity->source_id = $request->source_id;
    $oportunity->product_id = $request->product_id;
    $oportunity->judul = $request->judul;
    $oportunity->deskripsi = $request->deskripsi;
    $oportunity->jumlah_step = $request->jumlah_step;
    $oportunity->save();
  }
}
