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
              Sales Name
            </th>
            <th>
              Leads Name
            </th>
            <th>
              Stages
            </th>
            <th>
              Amount
            </th>
            <th>
              Action
            </th>
          </tr>
        </thead>
        <body>
          @for($i=0; $i < 10; $i++)
            <tr>
              <td>
                {{$i + 1}}
              </td>
              <td>
                Sales {{$i + 1}}
              </td>
              <td>
                Leads {{$i + 1}}
              </td>
              <td>
                @if($i % 2 == 0)
                  Quoted
                @else
                  @if($i < 5)
                    Proposal
                  @else
                    Prospect
                  @endif
                @endif
              </td>
              <td>
                Rp. 25.000
              </td>
              <td>
                <div class="btn-groups">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endfor
        </body>
      </table>
    </div>
  </div>
@endsection
