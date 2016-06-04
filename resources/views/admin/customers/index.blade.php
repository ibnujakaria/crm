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
