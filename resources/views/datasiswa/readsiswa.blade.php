@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Siswa</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Siswa -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Siswa</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($readsiswa as $data)
                  <tr>
                    <td>{{ $data -> nis }}</td>
                    <td>{{ $data -> nama_siswa }}</td>
                    <td>{{ $data -> jenis_kelamin }}</td>
                    <td>{{ $data -> kelas }}</td>
                    <td>{{ $data -> jurusan}}</td>

                    <td align=center>
                      <a class="btn btn-success" href="/editsiswa/{{ $data -> nis}}" >EDIT </a>
                      <a class="btn btn-success" href="/deletesiswa/{{ $data -> nis}}" >HAPUS </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
                      <a class="btn btn-success" href="{{url('/addsiswa')}}">
                              Tambah Data
                      </a>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection