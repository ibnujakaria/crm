@extends('template')

@section('title')
  Admin | Products
@endsection

@section('header')
  Products
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <a class="btn btn-primary" href="{{url('products/create')}}">Tambah Produk</a>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Cover
            </th>
            <th>
              Nama
            </th>
            <th>
              Harga
            </th>
            <th>
              Stok
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $key => $product)
            <tr>
              <td>
                {{$key + 1}}
              </td>
              <td>
                <img style="width: 80px; height: auto" src="{{$product->cover_src}}" alt="" />
              </td>
              <td>
                {{$product->nama}}
              </td>
              <td>
                {{$product->harga_manusia}}
              </td>
              <td>
                {{$product->stok}}
              </td>
              <td>
                <div class="btn-groups">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
