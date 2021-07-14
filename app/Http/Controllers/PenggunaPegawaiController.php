<?php

namespace App\Http\Controllers;

use App\Models\Pengguna_pegawai;
use Illuminate\Http\Request;

class PenggunaPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PenggunaPegawai = \App\Models\Pengguna_pegawai::all();
        return view('PenggunaPegawai', ['pengguna_pegawai' => $PenggunaPegawai]);
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
        // dd($_FILES['Image']);
        $Penggunapegawai = new Pengguna_pegawai();
        $Penggunapegawai->NRP_NIK = $request->NRP_NIK;
        $Penggunapegawai->Nama_Pegawai_PPNPN = $request->Nama_Pegawai_PPNPN;
        $Penggunapegawai->Bidang = $request->Bidang;
        $Penggunapegawai->Status = $request->Status ;
        $Penggunapegawai->No_Aset = $request->No_Aset;
        $Penggunapegawai->Nama_Barang = $request->Nama_Barang;
        $Penggunapegawai->Merk_Barang = $request->Merk_Barang;
        $Penggunapegawai->Kondisi = $request->Kondisi;
        $file=$request->file('Image');
        $file->move("storage/",$file->getClientOriginalName());
        $Penggunapegawai->Image=$file->getClientOriginalName();
 
        // $Penggunapegawai->Image = $request->Image;
      
        $Penggunapegawai->save(); 
        return redirect('/penggunapegawai');
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
    public function proses_edit(Request $request) {
        
        $Penggunapegawai = Pengguna_pegawai::where('NRP_NIK', $request->input('NRP_NIK'))->first();
        $Penggunapegawai->NRP_NIK = $request->NRP_NIK;
        $Penggunapegawai->Nama_Pegawai_PPNPN = $request->Nama_Pegawai_PPNPN;
        $Penggunapegawai->Bidang = $request->Bidang;
        $Penggunapegawai->Status = $request->Status ;
        $Penggunapegawai->No_Aset = $request->No_Aset;
        $Penggunapegawai->Nama_Barang = $request->Nama_Barang;
        $Penggunapegawai->Merk_Barang = $request->Merk_Barang;
        $Penggunapegawai->Kondisi = $request->Kondisi;

        if($request->file('Image') != null){
          $file=$request->file('Image');
          $file->move("storage/",$file->getClientOriginalName());
          $Penggunapegawai->Image=$file->getClientOriginalName();
      }
      
        $Penggunapegawai->update();
        
        return redirect('penggunapegawai');
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_single_data($id) {
        $output = 'NRP NIK';
        $article = Pengguna_pegawai::where('NRP_NIK', $id)->first();
        
        return view('EditPenggunaPegawai', array(
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
       Pengguna_pegawai::where('NRP_NIK',$id)->delete();

       return redirect('penggunapegawai');
    }
}