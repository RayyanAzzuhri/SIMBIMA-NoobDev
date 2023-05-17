<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subjects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\data_bimbingan;

class PagesController extends Controller
{
        public function dashboard(){

        $role = Auth::user()->role;

        if($role == '2'){
            $data_bimbingan = data_bimbingan::all();
            return view('koordinator.dashboard_koor', compact('data_bimbingan'));
        } elseif($role == '1') {
            return view('dosen.dashboard_dsn');
        } else {
            return view('mahasiswa.dashboard_mhs');
        }
    }
}

