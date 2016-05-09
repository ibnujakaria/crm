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
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-product">Tambah Produk</button>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Nama
            </th>
            <th>
              Merk
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
        <body>
          @for($i=0; $i < 10; $i++)
            <tr>
              <td>
                {{$i + 1}}
              </td>
              <td>
                Barang {{$i + 1}}
              </td>
              <td>
                Merk {{$i + 1}}
              </td>
              <td>
                Rp. 50.000
              </td>
              <td>
                <div class="btn-groups">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endfor
        </body>
      </table>
    </div>
  </div>
@endsection

@section('modal')
  <div id="modal-new-product" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Product Baru</h4>
        </div>
        <div class="modal-body">
          <form class="form" action="" method="get">
            <div class="row">
              <div class="col-md-7">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" name="name" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label>Merk</label>
                  <input class="form-control" type="text" name="merk" placeholder="Merk">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input class="form-control" type="number" placeholder="ex: 100000">
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input class="form-control" type="number" placeholder="Stok">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label>Gambar</label>
                  <div class="">
                    <img src="http://duncanlock.net/images/posts/better-figures-images-plugin-for-pelican/dummy-200x200.png" style="width: 100%; height: auto"/>
                  </div>
                  <div style="margin-top: 10px">
                    <input type="file" name="name" value="">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
