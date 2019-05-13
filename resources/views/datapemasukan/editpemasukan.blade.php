@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Pemasukan</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Pemasukan -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pemasukan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
              @foreach ($editpemasukan as $data)
              <form action="/updatepemasukan" method="POST">
                  <tr>
                  {{csrf_field()}}
                    <th>NIS</th>
                    <th>NAMA PEMASUKAN</th>
                    <th>TANGGAL</th>
                    <th>NOMINAL</th>
                    <th>OPSI</th>
                  </tr>
                  <tr>
                    <th><input type="text" name="nis" value="{{ $data->nis }}"></th>
                    <th><input type="text" name="nama_pemasukan" value="{{ $data->nama_pemasukan }}"></th>
                    <th><input type="date" name="tanggal_pemasukan" value="{{ $data->tanggal_pemasukan }}"></th>
                    <th><input type="text" name="nominal_pemasukan" value="{{ $data->nominal_pemasukan }}"></th>
                    <td align=center>
                      <input class="btn btn-success" type="submit" value="Simpan Data">
                    </td>
                  </tr>
                </form>
                @endforeach
              </table>
                      <a class="btn btn-success" href="">
                        Kembali
                      </a>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection