<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $surat = Surat::where('nama_surat', 'LIKE', "%$keyword%")
                ->orWhere('no_surat', 'LIKE', "%$keyword%")
                ->orWhere('alamat_surat', 'LIKE', "%$keyword%")
                ->orWhere('perihal_surat', 'LIKE', "%$keyword%")
                ->orWhere('tujuan', 'LIKE', "%$keyword%")
                ->orWhere('masuk', 'LIKE', "%$keyword%")
                ->orWhere('keluar', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $agenda = Agenda::paginate($perPage);
        }

        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $agenda = [
        //     'nama_surat'=>'required',
        //     'no_surat'=>'required',
        //     'alamat_surat'=>'required',
        //     'perihal_surat'=>'required',
        //     'tujuan'=>'required',
        //     'masuk'=>'required',
        //     'keluar'=>'required'
        // ];
        $data = array(
            array(
            'nama_surat'=> $request->get('nama_surat'), 
            'no_surat'=> $request->get('no_surat'),
            'alamat_surat'=> $request->get('alamat_surat'),
            'perihal_surat'=> $request->get('perihal_surat'),
            'tujuan'=> $request->get('tujuan'),
            'masuk'=> $request->get('masuk'),
            'keluar'=> $request->get('keluar'),
            ),
            //array('products_id'=> $request->get('products_id'), 'products'=> $request->get('products'), 'price'=> $request->get('price'), 'user_id'=> $request->get('user_id'), 'user_name'=> $request->get('user_name'), 'user_email'=> $request->get('user_email'),
            //...
         );
      
          $query_insert = DB::table('agenda_m')->insert($data);
          return redirect('agenda');
      
          //For info
          //Model::insert($data); // Eloquent approach
          //DB::table('cashier')->insert($data); // Query Builder approach as you are using
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $agenda = Agenda::findOrFail($id);
        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $data = array(
        //     array(
        //     'id'=>$request->get('id'),
        //     'nama_surat'=> $request->get('nama_surat'), 
        //     'no_surat'=> $request->get('no_surat'),
        //     'alamat_surat'=> $request->get('alamat_surat'),
        //     'perihal_surat'=> $request->get('perihal_surat'),
        //     'tujuan'=> $request->get('tujuan'),
        //     'masuk'=> $request->get('masuk'),
        //     'keluar'=> $request->get('keluar'),
        //     ),
        //     //array('products_id'=> $request->get('products_id'), 'products'=> $request->get('products'), 'price'=> $request->get('price'), 'user_id'=> $request->get('user_id'), 'user_name'=> $request->get('user_name'), 'user_email'=> $request->get('user_email'),
        //     //...
        //  );
      
        //   $query_insert = DB::table('agenda_m')->update($data);
        //   return redirect('agenda');
        $data = \App\Agenda::find($id);

        $data->update($request->all());

        return redirect()->route('agenda.index')->with('success', 'Data berhasil terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
