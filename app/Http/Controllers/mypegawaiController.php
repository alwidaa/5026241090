<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class mypegawaiController extends Controller
{
   public function index()
{
    $mypegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();

    return view('mypegawai.index', compact('mypegawai'));
}

public function view($kodepegawai)
{
    $pegawai = DB::table('mypegawai')
                ->where('kodepegawai', $kodepegawai)
                ->first();

    return view('mypegawai.view', compact('pegawai'));
}
    public function Tambah()
    {
        $mypegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();

        return view('mypegawai.tambah');
    }

   public function store(Request $request){
    DB::table('mypegawai')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    return redirect('/eas');
}

}
