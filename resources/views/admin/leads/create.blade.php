@extends('template')

@section('title', 'Admin | Create Leads')

@section('header', 'Leads <small>create</small>')

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-md-8">
          <form class="form" action="{{url('leads')}}" method="post">
            {{csrf_field()}}
            <div class="row">
              <div class="col-sm-6">
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
                  <label>Perusahaan</label>
                  @if($errors->has('nama_perusahaan'))
                    <p class="label label-danger">
                      {{$errors->first('nama_perusahaan')}}
                    </p>
                  @endif
                  <input class="form-control" type="text" name="nama_perusahaan" placeholder="Nama perusahaan" value="{{old('nama_perusahaan')}}">
                </div>
                <div class="form-group">
                  <label>Sumber</label>
                  <select class="form-control" name="sumber">
                    <option value="telepon_pribadi">Telepon Pribadi</option>
                    <option value="seminar">Seminar</option>
                    <option value="email_pribadi">Email Pribadi</option>
                    <option value="pertemuan_offline">Pertemuan Offline</option>
                    <option value="kustomer_lama">Kustomer Lama</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="partner">Partner</option>
                    <option value="relasi_publik">Relasi Publik</option>
                    <option value="mendaftar_sendiri">Mendaftar Sendiri</option>
                    <option value="pameran">pameran</option>
                    <option value="website">Website</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Industry</label>
                  <select class="form-control" name="industri" >
                    <option value="aerospace">Aerospace</option>
                    <option value="hardware">Computer Hardware</option>
                    <option value="software">Computer Software</option>
                    <option value="distribution">Distribution</option>
                    <option value="finance">Finance</option>
                    <option value="gen_service">General Services</option>
                    <option value="health_care">Health Care</option>
                    <option value="insurance">Insurance</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="media">Media</option>
                    <option value="non_profit">Non-profit</option>
                    <option value="real_estate">Real Estate</option>
                    <option value="retail">Retail</option>
                    <option value="e_tailer">E-tailer</option>
                    <option value="telecommunications">Telecommunications</option>
                    <option value="press">Press</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  @if($errors->has('tanggal_lahir'))
                    <p class="label label-danger">
                      {{$errors->first('tanggal_lahir')}}
                    </p>
                  @endif
                  <input class="form-control" type="date" name="tanggal_lahir" placeholder="tanggal lahir" value="{{old('tanggal_lahir')}}">
                </div>
                <div class="form-group">
                  <label>Jensi kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  @if($errors->has('alamat'))
                    <p class="label label-danger">
                      {{$errors->first('alamat')}}
                    </p>
                  @endif
                  <textarea name="alamat" class="form-control" placeholder="Address" rows="4" cols="40">{{old('alamat')}}</textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
