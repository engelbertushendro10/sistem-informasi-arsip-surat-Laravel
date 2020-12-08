<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JenisSurat;
use App\Suratkeluar;
use Illuminate\Http\Request;

use PDF;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $surat = Suratkeluar::where('no_surat', 'LIKE', "%$keyword%")
                ->orWhere('no_agenda', 'LIKE', "%$keyword%")
                ->orWhere('jenis_surat_id', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_kirim', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_terima', 'LIKE', "%$keyword%")
                ->orWhere('pengirim', 'LIKE', "%$keyword%")
                ->orWhere('perihal', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        }else{
            $surat = Suratkeluar::paginate($perPage);
        }

        return view('suratkeluar.index', compact('surat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $jenisSurats = JenisSurat::pluck('name','id');
        return view('suratkeluar.create', compact('jenisSurats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validation = [
            'no_surat' => 'required',
            'jenis_surat_id' => 'required',
            'tanggal_kirim' => 'required',
            'tipe' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required',
        ];

        if ($request->tipe == 'masuk') {
           $validation = array_add($validation, 'tanggal_terima', 'required');
        }

        $request->validate($validation);

        $requestData = array_add($request->all(), 'user_id', $request->user()->id);
        $requestData = array_add($requestData, 'no_agenda', Suratkeluar::whereTipe($request->tipe)->count()+1);

        Suratkeluar::create($requestData);

        return redirect('suratkeluar')->with('flash_message', 'Surat added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $surat = Suratkeluar::findOrFail($id);

        return view('suratkeluar.index', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $surat = Suratkeluar::findOrFail($id);
        $jenisSurats = JenisSurat::pluck('name','id');

        return view('suratkeluar.edit', compact('surat','jenisSurats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        // $validation = [
        //     'no_surat' => 'required',
        //     'no_agenda' => 'required',
        //     'jenis_surat_id' => 'required',
        //     'tanggal_kirim' => 'required',
        //     'tipe' => 'required',
        //     'pengirim' => 'required',
        //     'perihal' => 'required',
        // ];

        // if ($request->tipe == 'masuk') {
        //     $validation = array_add($validation, 'tanggal_terima', 'required');
        // }

        // $request->validate($validation);

        // $requestData = $request->all();

        // $surat = Suratkeluar::findOrFail($id);
        // $surat->update($requestData);

        // return redirect('suratkeluar')->with('flash_message', 'Surat updated!');
        $data = \App\Suratkeluar::find($id);

        $data->update($request->all());

        return redirect()->route('suratkeluar.index')->with('success', 'Data berhasil terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Suratkeluar::destroy($id);

        return redirect('suratkeluar')->with('flash_message', 'Surat deleted!');
    }

    public function laporan (Request $request)
    {
        $from = \Carbon\Carbon::now();
        $to = \Carbon\Carbon::now();
        $tipe = 'masuk';
        if ($request->from && $request->to && $request->tipe) {
            $from = $request->from;
            $to = $request->to;
            $tipe = $request->tipe;
        }

        $surats = Suratkeluar::whereTipe($tipe)-> whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->get();

        return view('suratkeluar.laporan', compact('surats','from','to','tipe'));
    }
    public function cetak(){
        $cetak = Suratkeluar::all();
        $pdf = PDF::loadview('laporan/laporan',['cetak'=>$cetak]);
    	return $pdf->download('laporan-laporan.pdf', compact('cetak'));
    }
    public function cari(Request $request){
        $surat = $request->get('search');
        $surat = Suratkeluar::where('no_surat','like',"%".$surat."%" )->paginate(10);
        return view('suratkeluar.index',compact('surat'));
    }
}