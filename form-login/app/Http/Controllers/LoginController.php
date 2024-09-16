<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

class LoginController extends Controller
{
    public function postlogin (Request $request) {
        // buat mengecek apakah data sudah masuk ke controller (dd($request -> all()); 
        // dd($request->all());


        if (Auth::attempt($request -> only('email', 'password'))){
            return redirect('/welcome');

        }
        return redirect('shop');

        // return redirect('shop');
    }

    public function index (Request $request) {

        return view ('login');
    }


    public function forget (Request $request) {

        return view ('forget');
    }
}
