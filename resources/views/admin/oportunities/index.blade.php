@extends('template')

@section('title')
  Admin | Oportunities
@endsection

@section('header')
  Oportunities
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <a href="{{url('oportunities/create')}}" class="btn btn-primary">Tambah Oportunity</a>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Judul
            </th>
            <th>
              Sales
            </th>
            <th>
              Nama Client
            </th>
            <th>
              Status
            </th>
            <th>
              Product
            </th>
            <th>
              Step
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
        <body>
          @foreach($oportunities as $key => $oportunity)
            <tr id-oportunity="{{$oportunity->i}}">
              <td>
                {{$key + 1}}
              </td>
              <td>
                {{$oportunity->judul}}
              </td>
              <td>
                {{$oportunity->sales->nama}}
              </td>
              <td>
                {{$oportunity->source->nama}}
              </td>
              <td>
                {{$oportunity->source->status}}
              </td>
              <td>
                {{$oportunity->product->nama}}
              </td>
              <td>
                {{$oportunity->jumlah_step}}
              </td>
              <td>
                <div class="btn-group">
                  <a href="{{url("oportunities/{$oportunity->id}")}}" class="btn btn-default"><span class="fa fa-eye"></span></a>
                  <a href="{{url("oportunities/{$oportunity->id}/edit")}}" class="btn btn-default"><span class="fa fa-edit"></span></a>
                  <button class="btn btn-danger" onclick="hapus({{$oportunity->id}})"><span class="fa fa-trash"></span></button>
                </div>
              </td>
            </tr>
          @endforeach
        </body>
      </table>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    function hapus(id) {
      confirm("anda yakin akan menghapus " +id)
    }
  </script>
@endsection
