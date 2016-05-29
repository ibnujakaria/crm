@extends('template')

@section('title')
  Admin | Leads
@endsection

@section('header')
  Leads
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <a class="btn btn-primary" href="{{url('leads/create')}}">Tambah Leads</a>

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
          @foreach($leads as $key => $lead)
            <tr>
              <td>
                {{$key + 1}}
              </td>
              <td>
                S0{{$lead->id}}
              </td>
              <td>
                {{$lead->nama}}
              </td>
              <td>
                {{$lead->email}}
              </td>
              <td>
                {{$lead->alamat}}
              </td>
              <td>
                {{$lead->nama_perusahaan}}
              </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                  <button class="btn btn-success">Pindah ke Customers</button>
                </div>
              </td>
            </tr>
          @endforeach
        </body>
      </table>
    </div>
  </div>
@endsection
