<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class NotifController extends Controller
{
	public function index(){
		return view('notifikasi');
	}

	public function sukses(){
		Session::flash('sukses','Ini notifikasi SUKSES');
		return redirect('pesan');
	}

	public function peringatan(){
		Session::flash('peringatan','Ini notifikasi PERINGATAN');
		return redirect('pesan');
	}

	public function gagal(){
		Session::flash('gagal','Ini notifikasi GAGAL');
		return redirect('pesan');
	}
}