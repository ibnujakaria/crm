<?php
namespace App\Api;

use App\Activity;

class ActivityApi {

  public function create($request, $oportunity)
  {
    $activity = new Activity;
    $activity->oportunity_id = $oportunity->id;
    $activity->nama = $request->nama;
    $activity->deskripsi = $request->deskripsi;
    $activity->biaya = $request->biaya;
    $activity->wacana_at = $request->tanggal;
    $activity->status = $request->status;
    $activity->save();

    return $activity;
  }
}
