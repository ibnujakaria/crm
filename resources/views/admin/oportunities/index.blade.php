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
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-oportunity">Tambah Progress Oportunity</button>

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

@section('modal')
  <div id="modal-new-oportunity" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Progress Oportunity</h4>
        </div>
        <div class="modal-body">
          <form class="form" action="" method="get">
            <div class="form-group">
              <label>Sales</label>
              <select class="form-control" name="">
                @for($i=0; $i < 5; $i++)
                  <option value="option">Sales {{$i + 1}}</option>
                @endfor
              </select>
            </div>
            <div class="form-group">
              <label>Leads</label>
              <select class="form-control" name="">
                @for($i=0; $i < 5; $i++)
                  <option value="option">Leads {{$i + 1}}</option>
                @endfor
              </select>
            </div>
            <div class="form-group">
              <label>Stage</label>
              <select class="form-control" name="">
                <option value="option">Prospect</option>
                <option value="option">Quoted</option>
                <option value="option">Proposal</option>
              </select>
            </div>
            <div class="form-group">
              <label>Date</label>
              <input type="date" class="form-control" name="">
            </div>
            <div class="form-group">
              <label>Amount</label>
              <input class="form-control" type="number" name="amount" placeholder="1000000">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
