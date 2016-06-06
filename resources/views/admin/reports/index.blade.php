@extends('template')

@section('title')
  Admin | Reports
@endsection

@section('header')
  Reports
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <table class="table table-stripped table-striped">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Nama
            </th>
            <th>
              Email
            </th>
            <th>
              Pesan
            </th>
            <th>
              Tanggal
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection
