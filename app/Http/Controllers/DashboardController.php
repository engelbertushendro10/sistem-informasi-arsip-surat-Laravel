<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class DashboardController extends Controller
{
    public function index(){
        $surat_masuk = DB::table('surats')
                 ->select('tipe', DB::raw('count(*) as surat_masuk'))
                 ->groupBy('tipe')
                 ->get();
        return view('/home', compact('surat_masuk'));
    }
    
}
