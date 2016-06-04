@extends('template')

@section('title', 'Sales | Edit')

@section('header', 'Sales <small>edit</small>')

@section('body')
  <div class="box">
    <div class="box-body">
      <form class="form" action="{{url("sales/{$sales->id}")}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama</label>
            @if($errors->has('nama'))
              <p class="label label-danger">
                {{$errors->first('nama')}}
              </p>
            @endif
            <input class="form-control" type="text" name="nama" placeholder="Nama" value="{{$sales->nama}}">
          </div>
          <div class="form-group">
            <label>Email</label>
            @if($errors->has('email'))
              <p class="label label-danger">
                {{$errors->first('email')}}
              </p>
            @endif
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{$sales->email}}">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            @if($errors->has('tanggal_lahir'))
              <p class="label label-danger">
                {{$errors->first('tanggal_lahir')}}
              </p>
            @endif
            <input class="form-control" name="tanggal_lahir" type="date" placeholder="tanggal lahir" value="{{$sales->tanggal_lahir}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
              <option value="L" {{$sales->jenis_kelamin === 'L' ? 'selected' : ''}}>Laki-laki</option>
              <option value="P" {{$sales->jenis_kelamin === 'P' ? 'selected' : ''}}>Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Perkawinan</label>
            <select class="form-control" name="status_perkawinan">
              <option value="belum" {{$sales->status_perkawinan === 'belum' ? 'selected' : ''}}>Belum Menikah</option>
              <option value="sudah" {{$sales->status_perkawinan === 'belum' ? '' : 'selected'}}>Sudah Menikah</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            @if($errors->has('alamat'))
              <p class="label label-danger">
                {{$errors->first('alamat')}}
              </p>
            @endif
            <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" cols="40">{{$sales->alamat}}</textarea>
          </div>
          {{-- <div class="form-group">
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
          </div> --}}
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
