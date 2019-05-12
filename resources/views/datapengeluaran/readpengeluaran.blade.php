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
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NAMA PENGELUARAN</th>
                    <th>TANGGAL</th>
                    <th>NOMINAL</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($readpengeluaran as $data)
                  <tr>
                    <td>{{ $data -> id_pengeluaran }}</td>
                    <td>{{ $data -> nama_pengeluaran}}</td>
                    <td>{{ $data -> tanggal_pengeluaran }}</td>
                    <td>{{ $data -> nominal_pengeluaran }}</td>

                    <td align=center>
                      <a class="btn btn-success" href="/editpengeluaran/{{ $data -> id_pengeluaran}}" >EDIT </a>
                      <a class="btn btn-success" href="/deletepengeluaran/{{ $data -> id_pengeluaran}}" >HAPUS </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
                      <a class="btn btn-success" href="{{url('/addpengeluaran')}}">
                              Tambah Pengeluaram
                      </a>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection