@extends('template')

@section('title')
  Admin | Quotations
@endsection

@section('header')
  Quotations
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="clear-both">
        <div style="float: right">
          <a href="{{url('quotations/create')}}" class="btn btn-primary">Tambah Quotation</a>
        </div>
      </div>
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
