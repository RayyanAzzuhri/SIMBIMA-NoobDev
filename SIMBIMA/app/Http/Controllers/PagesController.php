<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PagesController extends Controller
{
        public function dashboard(){

        $role = Auth::user()->role;

        if($role == '2'){
            return view('koordinator.dashboard_koor');
        } elseif($role == '1') {
            return view('dosen.dashboard_dsn');
        } else {
            return view('mahasiswa.dashboard_mhs');
        }
    }
}

