<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subjects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\data_bimbingan;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
        public function dashboard(){

        $role = Auth::user()->role;

        $user = Auth::user();
        $name = $user->name;

        $data_bimbingan = DB::table('data_bimbingan')
        ->where('dosen_pembimbing_1', $name)
        ->orWhere('dosen_pembimbing_2', $name)
        ->get();
        
        if($role == '2'){
            return view('koordinator.dashboard_koor', ['data' => $data_bimbingan] );
        } elseif($role == '1') {
            $data_bimbingan = data_bimbingan::all();
            return view('dosen.dashboard_dsn', compact('data_bimbingan'));
        } else {
            $data_bimbingan = data_bimbingan::all();
            return view('mahasiswa.dashboard_mhs' , compact('data_bimbingan'));
        }
    }
}

