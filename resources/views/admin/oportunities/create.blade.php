@extends('template')

@section('title')
  Admin | Oportunities
@endsection

@section('header')
  Oportunities <small>Create</small>
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-md-7">
          <form class="form" action="{{url('oportunities')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              @if(config('auth.defaults.guard') === 'admin')
                <label>Sales</label>
                <select class="form-control" name="sales_id">
                  @foreach($sales as $key => $row)
                    <option value="{{$row->id}}">{{$row->nama}}</option>
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
                  <option value="{{$lead->id}}">{{$lead->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Product</label>
              <select class="form-control" name="product_id">
                @foreach($products as $key => $product)
                  <option value="{{$product->id}}">{{$product->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Jumlah Step</label>
              <input type="number" min="1" class="form-control" name="jumlah_step" placeholder="Jumlah Step">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
