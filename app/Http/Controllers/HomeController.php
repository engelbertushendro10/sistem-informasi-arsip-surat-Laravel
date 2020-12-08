<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Surat;
use App\suratkeluar;
use App\Providers\SweetAlertServiceProvider;
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
        $surat_masuk = Surat::count();
        $surat_keluar = Suratkeluar::count();
        return view('/home', compact('surat_masuk','surat_keluar'));
    }
}
