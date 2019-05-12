@extends('layouts.template')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">DATA PEMASUKAN</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Pemasukan -->
        <table class="table table-striped table-hover table-bordered">
	        <form action="/storesiswa" method="post">
            <tr>
              @csrf
                <th>ID</th>
                <th>NAMA PEMASUKAN</th>
                <th>TANGGAL</th>
                <th>NOMINAL</th>
                <th>OPSI</th>
                </tr>
            <tr>
                <th><input class="form-control" type="text" name="id_pemasukan" required="required"> <br/></th>
                <th><input class="form-control" type="text" name="nama_pemasukan" required="required"> <br/></th>
                <th><input class="form-control" type="text" name="tanggal_pemasukan" required="required"> <br/></th>
                <th><input class="form-control" type="text" name="nominal_pemasukan" required="required"> <br/></th>
            <td>
                <input class="btn btn-success" type="submit" value="Simpan Data">
            </td>
            </tr>
			    </form>
        </table>
          <a class="btn btn-success" href="">
            Kembali
          </a>

      <!-- /.container-fluid -->
@endsection