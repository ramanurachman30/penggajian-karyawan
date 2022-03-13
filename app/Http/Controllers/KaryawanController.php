<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $karyawan = Karyawan::latest()->paginate(5);
        $karyawan = Karyawan::all();
        $jumlah = Karyawan::all()->count();
        // return view('karyawan.index',compact('karyawan'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('karyawan.index')->with(['karyawan'=>$karyawan, 'jumlah'=>$jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('karyawan.create',compact('jabatan', $jabatan));
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
            'nama'=>'required',
            'jk'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'no_hp'=>'required',
            'pendidikan_terakhir'=>'required',
            'email'=>'required',
            'foto'=>'image|file|max:2048|mimes:jpg,png,jpeg',
            'jabatan_id'=>'required',
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //pasien::create($request->all());
        Karyawan::create([
            'nama'=>$request['nama'],
            'jk'=>$request['jk'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'alamat'=>$request['alamat'],
            'agama'=>$request['agama'],
            'no_hp'=>$request['no_hp'],
            'pendidikan_terakhir'=>$request['pendidikan_terakhir'],
            'email'=>$request['email'],
            'foto'=>$imgName,
            'jabatan_id'=>$request['jabatan_id'],
        ]);

        return redirect('karyawan')->with('status','Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view ('karyawan/show',compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $jabatan = Jabatan::all();
        return view('karyawan/edit', compact('karyawan', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama'=>'required',
            'jk'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'no_hp'=>'required',
            'pendidikan_terakhir'=>'required',
            'email'=>'required',
            'foto'=>'image|file|max:2048|mimes:jpg,png,jpeg',
            'jabatan_id'=>'required',
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }

        $karyawan->update($request->all());

        return redirect('karyawan')->with('status','Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);
        return redirect('karyawan')->with('status','Data Absen Berhasil Dihapus');
    }
}
