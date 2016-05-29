@extends('template')

@section('title', 'Sales | Create')

@section('header', 'Sales <small>Create</small>')

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="form" action="{{url('sales')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nama</label>
              @if($errors->has('nama'))
                <p class="label label-danger">
                  {{$errors->first('nama')}}
                </p>
              @endif
              <input class="form-control" type="text" name="nama" placeholder="Nama" value="{{old('nama')}}">
            </div>
            <div class="form-group">
              <label>Email</label>
              @if($errors->has('email'))
                <p class="label label-danger">
                  {{$errors->first('email')}}
                </p>
              @endif
              <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              @if($errors->has('tanggal_lahir'))
                <p class="label label-danger">
                  {{$errors->first('tanggal_lahir')}}
                </p>
              @endif
              <input class="form-control" name="tanggal_lahir" type="date" placeholder="tanggal lahir" value="{{old('tanggal_lahir')}}">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Status Perkawinan</label>
              <select class="form-control" name="status_perkawinan">
                <option value="belum">Belum Menikah</option>
                <option value="sudah">Sudah Menikah</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              @if($errors->has('alamat'))
                <p class="label label-danger">
                  {{$errors->first('alamat')}}
                </p>
              @endif
              <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" cols="40">{{old('alamat')}}</textarea>
            </div>
            <div class="form-group">
              <label>Password</label>
              @if($errors->has('password'))
                <p class="label label-danger">
                  {{$errors->first('password')}}
                </p>
              @endif
              <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Password konfirmasi</label>
              <input class="form-control" type="password" name="password_confirmation" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
