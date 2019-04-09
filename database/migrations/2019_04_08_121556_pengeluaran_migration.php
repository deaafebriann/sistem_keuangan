<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengeluaranMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function(Blueprint $kolom){
            $kolom->increments('id_pengeluaran');
            $kolom->string('nama_pengeluaran');
            $kolom->date('tanggal_pengeluaran');
            $kolom->string('nominal_pengeluaran');
            $kolom->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
