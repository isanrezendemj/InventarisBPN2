<?php

namespace App\Http\Controllers;

use App\Models\tb_security_code;
use Illuminate\Http\Request;

class InputRegisterMobileController extends Controller
{
    public function index()
    {
        return view('inputregistermobile');
    }
}