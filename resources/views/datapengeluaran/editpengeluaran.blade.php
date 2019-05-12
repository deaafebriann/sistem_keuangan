@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Pengeluaran</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Pengeluaran -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pengeluaran</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
              @foreach ($editpengeluaran as $data)
              <form action="/updatepengeluaran" method="POST">
                  <tr>
                  {{csrf_field()}}
                    <th>ID</th>
                    <th>NAMA PENGELUARAN</th>
                    <th>TANGGAL</th>
                    <th>NOMINAL</th>
                    <th>OPSI</th>
                  </tr>
                  <tr>
                    <th><input type="text" name="id_pengeluaran" value="{{ $data->id_pengeluaran }}"></th>
                    <th><input type="text" name="nama_pengeluaran" value="{{ $data->nama_pengeluaran }}"></th>
                    <th><input type="text" name="tanggal_pengeluaran" value="{{ $data->tanggal_pengeluaran }}"></th>
                    <th><input type="text" name="nominal_pengeluaran" value="{{ $data->nominal_pengeluaran }}"></th>
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