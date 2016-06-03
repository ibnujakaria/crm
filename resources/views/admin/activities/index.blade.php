@extends('template')

@section('title')
  Admin | Activities
@endsection

@section('header')
  Activities
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <a class="btn btn-primary">Tambah Activity</a>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Nama Activity
            </th>
            <th>
              Tempat
            </th>
            <th>
              Tanggal
            </th>
            <th>
              Deskripsi
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
                Rapat Akhir Bulan
              </td>
              <td>
                Kantor
              </td>
              <td>
                30-0{{$i + 1}}-2016
              </td>
              <td>
                Membahas Customers
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
