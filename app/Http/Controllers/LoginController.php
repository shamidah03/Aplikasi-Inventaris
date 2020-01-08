<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if(Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home');
        }
        
    }

    public function login(){
        return view('login');
    }
    

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data =Petugas::where('username',$username)->first();
        // dd($username);  
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama_petugas',$data->nama_petugas);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau username, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau username, salah!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}