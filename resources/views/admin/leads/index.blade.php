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
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-sales">Tambah Leads</button>

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
              Dari Sales
            </th>
            <th>
              Aksi
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
                S0{{$i + 1}}
              </td>
              <td>
                Hafiz Udin
              </td>
              <td>
                hafizudin@sales.com
              </td>
              <td>
                Sampang
              </td>
              <td>
                Andi Budi
              </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                  <button class="btn btn-success">Pindah ke Customers</button>
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
  <!-- Modal -->
<div id="modal-new-sales" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leads Baru</h4>
      </div>
      <div class="modal-body">
        <form class="form" action="" method="get">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="name" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Company Name</label>
                <input class="form-control" type="text" name="name" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Source</label>
                <select class="form-control" name="">
                  <option id="ext-gen594" value="">&nbsp;</option>
                  <option id="ext-gen595" value="LEAD_COLDCALL">Cold Call</option>
                  <option id="ext-gen596" value="LEAD_CONFERENCE">Conference</option>
                  <option id="ext-gen597" value="LEAD_DIRECTMAIL">Direct Mail</option>
                  <option id="ext-gen598" value="LEAD_EMPLOYEE">Employee</option>
                  <option id="ext-gen599" value="LEAD_EXISTCUST">Existing Customer</option>
                  <option id="ext-gen600" value="LEAD_OTHER">Other</option>
                  <option value="LEAD_PARTNER">Partner</option>
                  <option value="LEAD_PR">Public Relations</option>
                  <option value="LEAD_SELFGEN">Self Generated</option>
                  <option value="LEAD_TRADESHOW">Tradeshow</option>
                  <option value="LEAD_WEBSITE">Website</option>
                  <option value="LEAD_WORDOFMOUTH">Word of Mouth</option>
                </select>
              </div>
              <div class="form-group">
                <label>Industry</label>
                <select class="form-control" name="industryEnumId" id="createLeadForm_industryEnumId" size="1">
                  <option value="">&nbsp;</option>
                  <option value="IND_AEROSPACE">Aerospace</option>
                  <option value="IND_HARDWARE">Computer Hardware</option>
                  <option value="IND_SOFTWARE">Computer Software</option>
                  <option value="IND_DISTRIBUTION">Distribution</option>
                  <option value="IND_FINANCE">Finance</option>
                  <option value="IND_GEN_SERVICES">General Services</option>
                  <option value="IND_HEALTH_CARE">Health Care</option>
                  <option value="IND_INSURANCE">Insurance</option>
                  <option value="IND_MANUFACTURING">Manufacturing</option>
                  <option value="IND_MEDIA">Media</option>
                  <option value="IND_NON_PROFIT">Non-profit</option>
                  <option value="IND_REAL_ESTATE">Real Estate</option>
                  <option value="IND_RETAIL">Retail</option>
                  <option value="IND_ETAILER">E-tailer</option>
                  <option value="IND_TELECOM">Telecommunications</option>
                  <option value="IND_PRESS">Press</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Birth Date</label>
                <input class="form-control" type="date" placeholder="tanggal lahir">
              </div>
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="">
                  <option value="option">Male</option>
                  <option value="option">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label>State</label>
                <select class="form-control" name="">
                  <option value="option">East Java</option>
                </select>
              </div>
              <div class="form-group">
                <label>City</label>
                <select class="form-control" name="">
                  <option value="option">Bangkalan</option>
                  <option value="option">Sampang</option>
                  <option value="option">Pamekasan</option>
                  <option value="option">Sumenep</option>
                </select>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="alamat" class="form-control" placeholder="Address" rows="4" cols="40"></textarea>
              </div>
            </div>
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
