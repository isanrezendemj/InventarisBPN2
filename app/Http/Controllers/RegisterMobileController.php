<?php

namespace App\Http\Controllers;

use App\Models\tb_security_code;
use Illuminate\Http\Request;

class RegisterMobileController extends Controller
{
    public function index()
    {
        $RegisterMobile = \App\Models\tb_security_code::all();
        return view('RegisterMobile', ['RegisterMobile' => $RegisterMobile]);
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
       
    
        $RegisterMobile = new tb_security_code();
        $RegisterMobile->nama = $request->nama;
        $RegisterMobile->code = $request->code;
     

        $RegisterMobile->save();
        return redirect('/RegisterMobile');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_single_data($id_security)
    {
        tb_security_code::where('id_security', $id_security)->delete();

        return redirect('RegisterMobile');
    }
}