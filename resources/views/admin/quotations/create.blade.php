@extends('template')

@section('title')
  Admin | Quotations
@endsection

@section('header')
  Quotations <small>tambah</small>
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <form class="" action="" method="post">
          <div class="col-md-6">
            <div class="form-group">
              <label>Product</label>
              <select class="form-control" name="product">
                <option value="semua">Semua Product</option>
                @foreach($products as $key => $product)
                  <option value="{{$product->id}}">{{$product->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Clients</label>
              <select class="form-control" name="source">
                <option value="semua">Semua Client</option>
                <option value="leads">Leads</option>
                <option value="customers">Customers</option>
              </select>
            </div>
            <div class="form-group">
              <label>Transaksi Minimal</label>
              <input type="number" name="transaksi_minimal" step="1000" min="0" class="form-control" placeholder="5000000">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Tersedia untuk</label>
              <input type="number" name="jumlah" min="0" class="form-control" placeholder="3 kali">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi" rows="4" class="form-control" placeholder="Deskripsi"></textarea>
            </div>
            <div class="clear-both">
              <div style="float: right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
