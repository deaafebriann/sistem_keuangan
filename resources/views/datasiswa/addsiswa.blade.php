@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">DATA SISWA</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Kategori -->
        <table class="table table-striped table-hover table-bordered">
	        <form action="/storesiswa" method="post">
                    <tr>
                        @csrf
                <th>NIS</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>OPSI</th>
                </tr>
                    
                    <tr>
                            <th><input class="form-control" type="text" name="nis" required="required"> <br/></th>
                            <th><input class="form-control" type="text" name="nama_siswa" required="required"> <br/></th>

                            <th><input type="radio" name="jenis_kelamin" required="required" value="L">
                            <label for="Radio1">L</label> <br>
                            <input type="radio" name="jenis_kelamin" required="required" value="P">
                            <label for="Radio1">P</label>
                            <br/></th>
                            <th><input class="form-control" type="text" name="kelas" required="required"> <br/></th>
                            <th><input class="form-control" type="text" name="jurusan" required="required"> <br/></th>
                            <td align=center>
                                <input class="btn btn-success" type="submit" value="Simpan Data">
                            </td>
                    </tr>
			</form>
            </table>
                      <a class="btn btn-success" href="readsiswa">
                              Kembali
                      </a>

      <!-- /.container-fluid -->
@endsection