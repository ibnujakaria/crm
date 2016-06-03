@extends('template')

@section('title')
  Admin | Customers
@endsection

@section('header')
  Customers
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-customers">Tambah Customers</button>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Id
            </th>
            <th>
              Nama
            </th>
            <th>
              Email
            </th>
            <th>
              Alamat
            </th>
            <th>
              Nama Perusahaan
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
        <body>
          @foreach($customers as $key => $customer)
            <tr>
              <td>
                {{$key + 1}}
              </td>
              <td>
                S0{{$customer->id}}
              </td>
              <td>
                {{$customer->nama}}
              </td>
              <td>
                {{$customer->email}}
              </td>
              <td>
                {{$customer->alamat}}
              </td>
              <td>
                {{$customer->nama_perusahaan}}
              </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-default"><span class="fa fa-edit"></span></button>
                  <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                </div>
              </td>
            </tr>
          @endforeach
        </body>
      </table>
    </div>
  </div>
@endsection
@section('modal')
  <!-- Modal -->
<div id="modal-new-customers" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leads Baru</h4>
      </div>
      <div class="modal-body">
        <form class="form" action="" method="get">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="text" name="name" placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="name" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="tanggal lahir">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="">
              <option value="option">Laki-laki</option>
              <option value="option">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Provinsi</label>
            <select class="form-control" name="">
              <option value="option">Jawa Timur</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <select class="form-control" name="">
              <option value="option">Bangkalan</option>
              <option value="option">Sampang</option>
              <option value="option">Pamekasan</option>
              <option value="option">Sumenep</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" cols="40"></textarea>
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
