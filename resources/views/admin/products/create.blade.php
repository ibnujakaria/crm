@extends('template')

@section('title')
  Admin | Products
@endsection

@section('header')
  Products <small>create</small>
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <form class="form" action="{{url('products')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-7">
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
              <label>Harga</label>
              @if($errors->has('harga'))
                <p class="label label-danger">
                  {{$errors->first('harga')}}
                </p>
              @endif
              <input class="form-control" name="harga" min="0" step="1000" type="number" value="{{old('harga')}}" placeholder="ex: 100000">
            </div>
            <div class="form-group">
              <label>Stok</label>
              @if($errors->has('stok'))
                <p class="label label-danger">
                  {{$errors->first('stok')}}
                </p>
              @endif
              <input class="form-control" type="number" name="stok" value="{{old('stok')}}" placeholder="Stok">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label>Gambar</label>
              @if($errors->has('cover'))
                <p class="label label-danger">
                  {{$errors->first('cover')}}
                </p>
              @endif
              <div class="">
                <img src="http://duncanlock.net/images/posts/better-figures-images-plugin-for-pelican/dummy-200x200.png" style="width: 100%; height: auto"/>
              </div>
              <div style="margin-top: 10px">
                <input type="file" name="cover" value="">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{url('assets/dist/js/image-reader.js')}}" charset="utf-8"></script>
  <script type="text/javascript">
    ImageReader
      .init({
        'img': $('img'),
        'input': $('input[type=file]')
      })
      .commit();
  </script>
@endsection
