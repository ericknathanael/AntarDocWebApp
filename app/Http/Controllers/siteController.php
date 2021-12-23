<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        //dd($req->all());
        $rules = [
            "username" => 'required',
            "nama_lengkap" => 'required',
            "email_address" => 'required',
            "Address" => 'required',
            "inputState" => 'required',
            "inputSpesialis" => 'required',
            "experienceinput" => 'required',
            "telephoneinput" => 'required'
        ];
        $errormsg = [
            "username.required" => "username tidak boleh kosong",
            "nama_lengkap.required" => "nama lengkap tidak boleh kosong",
            "email_address" => "email tidak boleh kosong"
        ];
        //$this->validate($req,$rules,$errormsg);

        users::create([
            'user_username' => $req->username,
            'user_password' => Hash::make('123'),
            'user_nama_lengkap' => $req->nama_lengkap,
            'user_email' => $req->email_address,
            'status_user' => 1,
            'saldo_user' => 0,
            'user_phone_number' => $req->telephoneinput
        ]);

        $userid = users::max('user_id');

        doctor::create([
            'user_id' => $userid,
            'doctor_address' => $req->email_address,
            'doctor_experience' => $req->experienceinput,
            'doctor_specialist' => $req->inputspesialis
        ]);

        return redirect("/home");
    }
}
