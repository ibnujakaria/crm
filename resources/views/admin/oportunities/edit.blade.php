@extends('template')

@section('title')
  Admin | Edit
@endsection

@section('header')
  Oportunity | Edit
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
          <form class="form" action="{{url("oportunities", [$oportunity->id])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Judul Oportunity</label>
                  <input class="form-control" type="text" name="judul" value="{{$oportunity->judul}}" placeholder="Judul Oportunity">
                </div>
                <div class="form-group">
                  <label>Jumlah Step</label>
                  <input type="number" min="1" class="form-control" name="jumlah_step" placeholder="Jumlah Step" value="{{$oportunity->jumlah_step}}">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{$oportunity->deskripsi}}</textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  @if(config('auth.defaults.guard') === 'admin')
                    <label>Sales</label>
                    <select class="form-control" name="sales_id">
                      @foreach($sales as $key => $row)
                        <option value="{{$row->id}}" {{$row->id == $oportunity->sales->id ? 'selected':'asdf'}}>{{$row->nama}}</option>
                      @endforeach
                    </select>
                  @else
                    <input type="hidden" name="sales_id" value="{{auth()->user()->id}}">
                  @endif
                </div>
                <div class="form-group">
                  <label>Leads/Customers</label>
                  <select class="form-control" name="source_id">
                    @foreach($leads as $key => $lead)
                      <option value="{{$lead->id}}" {{$lead->id == $oportunity->source->id ? 'selected':''}}>{{$lead->nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Product</label>
                  <select class="form-control" name="product_id">
                    @foreach($products as $key => $product)
                      <option value="{{$product->id}}" {{$product->id == $oportunity->product->id ? 'selected':''}}>{{$product->nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                </div>
              </div>
            </div>
          </form>
    </div>
@endsection
