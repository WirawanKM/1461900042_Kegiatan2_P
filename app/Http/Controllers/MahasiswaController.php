<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class Mahasiswacontroller extends Controller
{
    public function buku0042(){
        $ms_buku = DB::table('ms_buku')->get();
        return view('buku0042',['ms_buku'=> $ms_buku]);
    }
}