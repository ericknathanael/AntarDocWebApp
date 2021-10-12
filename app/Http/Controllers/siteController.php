<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function checkLogin(Request $req)
    {
        $user = $req->username;
        $password = $req->password;

        $rules = [
            "username"      => 'required',
            "password"      => 'required'
        ];

        $errormsg= [
            "required" =>":attribute belum diisi",
        ];

        $this->validate($req, $rules, $errormsg);

        if($user == "admin"&& $password == "admin"){
            return redirect('/home');
        }
    }

    public function login()
    {
        return view('home');
    }
    public function addDoctor()
    {
        return view('formDoctor');
    }

    public function insertDoctor(Request $req)
    {
        $rules = [

        ];
        $errormsg = [

        ];
        // $this->validate($req,$rules,$error);

        return redirect("/home");
    }
}
