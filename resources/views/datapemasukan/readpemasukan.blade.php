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
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA PEMASUKAN</th>
                    <th>TANGGAL</th>
                    <th>NOMINAL</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($readpemasukan as $data)
                  <tr>
                    <td>{{ $data -> id_pemasukan }}</td>
                    <td>{{ $data -> nama_pemasukan }}</td>
                    <td>{{ $data -> tanggal_pemasukan }}</td>
                    <td>{{ $data -> nominal_pemasukan }}</td>

                    <td align=center>
                      <a class="btn btn-success" href="/editpemasukan/{{ $data -> id_pemasukan}}" >EDIT </a>
                      <a class="btn btn-success" href="/deletepemasukan/{{ $data -> id_pemasukan}}" >HAPUS </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
                      <a class="btn btn-success" href="{{url('/addpemasukan')}}">
                              Tambah Pemasukan
                      </a>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection