<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function welcome(Request $request){
        //dd($request->all());
        $nama_awal = $request["first_name"];
        $nama_akhir = $request["last_name"];
        //return $nama_awal." ".$nama_akhir;
        return view('welcome');
    }
}
