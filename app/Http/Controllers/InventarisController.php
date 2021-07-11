<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inventaris = \App\Models\Inventaris::all();
        return view('Inventaris', ['inventaris' => $Inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'No_Aset' => 'required|unique:App\Models\Inventaris',
        ]);

    
        $Inventaris = new Inventaris();
        $Inventaris->id = $request->id;
        $Inventaris->Nama_Barang = $request->Nama_Barang;
        $Inventaris->No_Aset = $request->No_Aset;
        $Inventaris->Tgl_Peroleh = $request->Tgl_Peroleh;
        $Inventaris->Asal_Perolehan = $request->Asal_Perolehan;
        $Inventaris->Rupiah_Aset = $request->Rupiah_Aset;
        $Inventaris->Tempat_Aset = $request->Tempat_Aset;
        $Inventaris->Merk_Barang = $request->Merk_Barang;
        $Inventaris->Kondisi = $request->Kondisi;
        $file=$request->file('Image');
        $file->move("storage/", $file->getClientOriginalName());
        $Inventaris->Image=$file->getClientOriginalName();

        $Inventaris->save();
        return redirect('/Inventaris');
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
    public function proses_edit(Request $request)
    {
        $Inventaris = Inventaris::where('id', $request->input('id'))->first();
        $Inventaris->Nama_Barang = $request->Nama_Barang;
        $Inventaris->No_Aset = $request->No_Aset;
        $Inventaris->Tgl_Peroleh = $request->Tgl_Peroleh;
        $Inventaris->Asal_Perolehan = $request->Asal_Perolehan;
        $Inventaris->Rupiah_Aset = $request->Rupiah_Aset;
        $Inventaris->Tempat_Aset = $request->Tempat_Aset;
        $Inventaris->Merk_Barang = $request->Merk_Barang;
        $Inventaris->Kondisi = $request->Kondisi;
        if ($request->file('Image') != null) {
            $file=$request->file('Image');
            $file->move("storage/", $file->getClientOriginalName());
            $Inventaris->Image=$file->getClientOriginalName();
        }
        $Inventaris->update();
   
        return redirect('Inventaris');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_single_data($id)
    {
        $output = 'id';
        $article = Inventaris::where('id', $id)->first();
        
        return view('EditInventaris', array(
          'content' => $output,
          'article' => $article
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_single_data($id)
    {
        Inventaris::where('id', $id)->delete();

        return redirect('Inventaris');
    }
}