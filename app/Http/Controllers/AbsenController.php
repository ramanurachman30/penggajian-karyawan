<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan=Karyawan::all();
        $absen=Absen::all();
        return view('absen/index', compact('karyawan','absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('absen/create', compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id'=>'required',
            'bulan'=>'required',
            'tahun'=>'required',
            'jumlah_masuk'=>'required'
        ]);


        //karyawan::create($request->all());
        absen::create([
            'karyawan_id'=>$request['karyawan_id'],
            'bulan'=>$request['bulan'],
            'tahun'=>$request['tahun'],
            'jumlah_masuk'=>$request['jumlah_masuk']

        ]);

        return redirect('/absen')->with('status','Data divisi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        $karyawan = Karyawan::all();
        return view('absen/edit', compact('absen', 'karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        absen::where('id',$absen->id)
        ->update([
            'karyawan_id'=>$request['karyawan_id'],
            'bulan'=>$request['bulan'],
            'tahun'=>$request['tahun'],
            'jumlah_masuk'=>$request['jumlah_masuk']

        ]);
        return redirect('/absen')->with('status', 'Data divisi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        Absen::destroy($absen->id);
        return redirect('absen')->with('status','Data Absen Berhasil Dihapus');
    }
}
