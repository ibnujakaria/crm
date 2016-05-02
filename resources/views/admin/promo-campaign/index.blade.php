@extends('template')

@section('title')
  Admin | Promo Campaign
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <button class="btn btn-primary">Tambah Promo Campaign</button>

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
              Judul Promo
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
        <body>
          @for($i=0; $i < 1; $i++)
            <tr>
              <td>
                {{$i + 1}}
              </td>
              <td>
                PC{{$i + 1}}
              </td>
              <td>
                Promo Hari Buruh Nasional
              </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endfor
        </body>
      </table>
    </div>
  </div>@endsection
