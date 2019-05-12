@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Kamera</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Siswa -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Kamera</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
              @foreach ($editsiswa as $data)
              <form action="/updatesiswa" method="POST">
                  <tr>
                  {{csrf_field()}}
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>OPSI</th>
                  </tr>
                  <tr>
                    <th><input type="text" name="nis" value="{{ $data->nis }}"></th>
                    <th><input type="text" name="nama_siswa" value="{{ $data->nama_siswa }}"></th>
                    <th><input type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}"></th>
                    <th><input type="text" name="kelas" value="{{ $data->kelas }}"></th>
                    <th><input type="text" name="jurusan" value="{{ $data->jurusan }}"></th>
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