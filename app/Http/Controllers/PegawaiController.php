<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        return view('hasil', [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
    }
}
