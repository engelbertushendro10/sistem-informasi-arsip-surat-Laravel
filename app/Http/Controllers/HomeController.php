<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Surat;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index(){
        $surat_masuk = DB::table('surats')
                 ->select('tipe', DB::raw('count(*) as surat_masuk'))
                 ->groupBy('tipe')
                 ->get('masuk');
        return view('/home', compact('surat_masuk'));
    }
    public function keluar(){
        $surat_keluar = DB::table('surats')
                 ->select('tipe', DB::raw('count(*) as surat_keluar'))
                 ->groupBy('tipe')
                 ->get('keluar');
        return view('/home', compact('surat_keluar'));
    }
}
