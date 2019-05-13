<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;
use App\Pemasukan;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemasukan = Pemasukan::all();
        
	    return view('datapemasukan.readpemasukan', ['readpemasukan' => $pemasukan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa = Siswa::all();
        return view('datapemasukan.addpemasukan', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('pemasukan')->insert([
            'nis' => $request->nis,
            'nama_pemasukan' => $request->nama_pemasukan,
            'tanggal_pemasukan' => $request->tanggal_pemasukan,
            'nominal_pemasukan' => $request->nominal_pemasukan
        ]);

        return redirect('readpemasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemasukan)
    {
        //
        $editpemasukan = DB::table('pemasukan')->where('id_pemasukan', $id_pemasukan)->get();
        return view('datapemasukan.editpemasukan', ['editpemasukan' => $editpemasukan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('pemasukan')->where('nis', $request->nis)->update([
            'nis' => $request->nis,
            'nama_pemasukan' => $request->nama_pemasukan,
            'tanggal_pemasukan' => $request->tanggal_pemasukan,
            'nominal_pemasukan' => $request->nominal_pemasukan
        ]);

        return redirect('readpemasukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemasukan)
    {
        //
        DB::table('pemasukan')->where('id_pemasukan', $id_pemasukan)->delete();
        return redirect('readpemasukan');
    }
}
