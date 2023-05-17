<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class dashboardController extends Controller
{

    public function showMahasiswaByDosen()
{
    // Ambil instance Dosen yang sedang login
    $dosen = Auth::user();


    // Ambil nama_mhs berdasarkan nama dosen yang login
       $nama = $dosen->DB::table('mhs')->pluck('nama')->toArray();

    // Kembalikan data ke view
    return view('koordinator', ['mahasiswas' => $nama]);
}

}
