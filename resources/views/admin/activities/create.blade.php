@extends('template')

@section('title', 'Admin | Activity Baru')

@section('header')
Activity Baru
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <form class="form" action="{{url("oportunities/{$oportunity->id}/activities")}}" method="post">
          <div class="col-md-6">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nama</label>
              @if($errors->has('nama'))
                <span class="label label-danger">{{$errors->first('nama')}}</span>
              @endif
              <input class="form-control" type="text" name="nama" value="{{old('nama')}}" placeholder="Nama activity">
            </div>
            <div class="form-group">
              <label>Tanggal Pelaksanaan</label>
              @if($errors->has('tanggal'))
                <span class="label label-danger">{{$errors->first('tanggal')}}</span>
              @endif
              <input class="datepicker form-control" type="text" name="tanggal" value="{{old('tanggal')}}" placeholder="Tanggal pelaksanaan">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option value="wacana">Wacana</option>
                <option value="progress">Progress</option>
                <option value="selesai">Selesai</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Biaya</label>
              @if($errors->has('biaya'))
                <span class="label label-danger">{{$errors->first('biaya')}}</span>
              @endif
              <input class="form-control" type="number" min="0" step="1000" name="biaya" value="{{old('tanggal')}}" placeholder="Biaya yang dihabiskan">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              @if($errors->has('keterangan'))
                <span class="label label-danger">{{$errors->first('keterangan')}}</span>
              @endif
              <textarea name="deskripsi" rows="4" cols="40" class="form-control" placeholder="Deskripsi">{{old('deskripsi')}}</textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <div class="btn-group" style="float: right">
                <a href="{{url("oportunities/{$oportunity->id}")}}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
