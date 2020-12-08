<?php

namespace App\Http\Controllers;
use App\Providers\SweetAlertServiceProvider;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function index()
    // {
    // Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
    // return view('home');
    // }
}
