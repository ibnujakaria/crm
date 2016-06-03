@extends('template')

@section('title')
  Admin | {{$oportunity->judul}}
@endsection

@section('header')
  Detail Oportunity
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
      @endif
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group" style="float: right">
            <a href="{{url("oportunities/{$oportunity->id}/edit")}}" class="btn btn-default">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Judul Oportunity</label>
            <input class="form-control" type="text" name="judul" value="{{$oportunity->judul}}" placeholder="Judul Oportunity" disabled="">
          </div>
          <div class="form-group">
            <label>Jumlah Step</label>
            <input type="number" min="1" class="form-control" name="jumlah_step" value="{{$oportunity->jumlah_step}}" placeholder="Jumlah Step" disabled="">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" disabled="">{{$oportunity->deskripsi}}</textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            @if(config('auth.defaults.guard') === 'admin')
              <label>Sales</label>
              <input type="text" disabled value="{{$oportunity->sales->nama}}" class="form-control">
            @endif
          </div>
          <div class="form-group">
            <label>Leads/Customers</label>
            <input type="text" disabled value="{{$oportunity->source->nama}}" class="form-control">
          </div>
          <div class="form-group">
            <label>Product</label>
            <input type="text" disabled value="{{$oportunity->product->nama}}" class="form-control">
          </div>
        </div>
      </div>
      <div>
        <h3>Activities</h3>
        <div style="overflow: hidden">
          <div style="float: right">
            <a href="{{url("oportunities/{$oportunity->id}/activities/create")}}" class="btn btn-primary">Tambah Activity</a>
          </div>
        </div>
        <table class="table table-stripped table-striped">
          <thead>
            <tr>
              <th>
                No
              </th>
              <th>
                Nama
              </th>
              <th>
                Biaya
              </th>
              <th>
                Keterangan
              </th>
              <th>
                Tanggal
              </th>
              <th>
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($oportunity->activities as $key => $activity)
              <tr>
                <td>
                  {{$key + 1}}
                </td>
                <td>
                  {{$activity->nama}}
                </td>
                <td>
                  {{$activity->biaya_manusia}}
                </td>
                <td>
                  {{$activity->deskripsi}}
                </td>
                <td>
                  {{$activity->updated_at}}
                </td>
                <td>
                  <div class="btn-group">
                    <a href="" class="btn btn-default">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
