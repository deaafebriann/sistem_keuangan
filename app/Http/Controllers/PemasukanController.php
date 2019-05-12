<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $readpemasukan = DB::table('pemasukan')->get();
        
	    return view('datapemasukan.readpemasukan', ['readpemasukan' => $readpemasukan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('datapemasukan.addpemasukan');
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
            'id_pemasukan' => $request->id_pemasukan,
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
        DB::table('pemasukan')->where('id_pemasukan', $request->id_pemasukan)->update([
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
    public function destroy($id)
    {
        //
        DB::table('pemasukan')->where('id_pemasukan', $id_pemasukan)->delete();
        return redirect('readpemasukan');
    }
}
