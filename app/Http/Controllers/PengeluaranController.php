<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $readpengeluaran= DB::table('pengeluaran')->get();
        
	    return view('datapengeluaran.readpengeluaran', ['readpengeluaran' => $readpengeluaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('datapengeluaran.addpengeluaran');
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
        DB::table('pengeluaran')->insert([
        'id_pengeluaran' => $request->id_pengeluaran,
        'nama_pengeluaran' => $request->nama_pengeluaran,
        'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
        'nominal_pengeluaran' => $request->nominal_pengeluaran
    ]);

    return redirect('readpengeluaran');
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
    public function edit($id_pengeluaran)
    {
        //
        $editpengeluaran = DB::table('pengeluaran')->where('id_pengeluaran', $id_pengeluaran)->get();
        return view('datapengeluaran.editpengeluaran', ['editpengeluaran' => $editpengeluaran]);
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
        DB::table('pengeluaran')->where('id_pengeluaran', $request->id_pengeluaran)->update([
            'nama_pengeluaran' => $request->nama_pengeluaran,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'nominal_pengeluaran' => $request->nominal_pengeluaran
        ]);

        return redirect('readpengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pengeluaran)
    {
        //
        DB::table('pengeluaran')->where('id_pengeluaran', $id_pengeluaran)->delete();
        return redirect('readpengeluaran');
    }
}
