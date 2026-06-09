<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelajarlagiController extends Controller
{
    // Menampilkan data lipstick
    public function index()
    {
        $lipstick = DB::table('lipstick')->paginate(10);

        return view('lipstick', ['lipstick' => $lipstick]);
    }

    // Menampilkan form tambah lipstick
    public function tambahlipstick()
    {
        return view('tambahlipstick');
    }

    // Menyimpan data lipstick
    public function store(Request $request)
    {
        DB::table('lipstick')->insert([
            'merklipstick' => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/lipstickdb');
    }

    // Menampilkan form edit lipstick
    public function editlipstick($id)
    {
        $lipstick = DB::table('lipstick')
            ->where('kodelipstick', $id)
            ->get();

        return view('editlipstick', ['lipstick' => $lipstick]);
    }

    // Update data lipstick
    public function update(Request $request)
    {
        DB::table('lipstick')
            ->where('kodelipstick', $request->id)
            ->update([
                'merklipstick' => $request->merklipstick,
                'stocklipstick' => $request->stocklipstick,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/lipstickdb');
    }

    // Hapus data lipstick
    public function hapus($id)
    {
        DB::table('lipstick')
            ->where('kodelipstick', $id)
            ->delete();

        return redirect('/lipstickdb');
    }

    // Cari data lipstick
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $lipstick = DB::table('lipstick')
            ->where('merklipstick', 'like', "%" . $cari . "%")
            ->paginate();

        return view('lipstick', ['lipstick' => $lipstick]);
    }
}
