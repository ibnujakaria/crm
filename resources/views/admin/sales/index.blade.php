@extends('template')

@section('title')
  Admin | Sales
@endsection

@section('header')
  Sales
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <a class="btn btn-primary" href="{{url('sales/create')}}">Tambah Sales</a>

      <table class="table table-striped">
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
              Aksi
            </th>
          </tr>
        </thead>
        <body>
          @foreach($sales as $key => $row)
            <tr>
              <td>
                {{$key + 1}}
              </td>
              <td>
                L0{{$row->id}}
              </td>
              <td>
                {{$row->nama}}
              </td>
              <td>
                {{$row->email}}
              </td>
              <td>
                {{$row->alamat}}
              </td>
              <td>
                <div class="btn-group">
                  <a href="{{url("/sales/{$row->id}/edit")}}" class="btn btn-default">Edit</a>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endforeach
        </body>
      </table>
    </div>
  </div>
@endsection
