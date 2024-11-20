<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("home",["key"=>"home"]);
    }

    public function daftarKaryawan(){
        return view("daftarKaryawan",["key"=>"daftarKaryawan"]);
    }

    public function daftarPerusahaan(){
        return view("daftarPerusahaan",["key"=>"daftarPerusahaan"]);
    }
}
