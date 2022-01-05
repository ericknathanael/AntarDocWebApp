<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\province;
use App\Models\spesialis;
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
        $users = doctor::with('users')->get();
        return view('home',[
            'doctor' => $users
        ]);
    }
    public function addDoctor()
    {
        $spesialis = spesialis::get();
        $provinsi = province::get();
        return view('formDoctor', [
            'list_spesialis' => $spesialis,
            'list_provinsi' => $provinsi
        ]);
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
            'status_user' => 0,
            'saldo_user' => 0,
            'user_phone_number' => $req->telephoneinput
        ]);

        $userid = users::max('user_id');

        doctor::create([
            'user_id' => $userid,
            'doctor_address' => $req->Address . " , " . $req->inputState,
            'doctor_experience' => $req->experienceinput,
            'doctor_specialist' => $req->inputspesialis
        ]);

        return redirect("/home");
    }


    public function addSpesialis()
    {
        $idspesialis = spesialis::max('id_spesialis');
        $spesialis = spesialis::get();
        return view('addspesialis', [
            'spesialis' => $spesialis
        ]);
    }

    public function insertSpesialis(Request $request)
    {
        spesialis::create([
            'nama_spesialis' => $request->nama_spesialis
        ]);

        return redirect('/addSpesialis');
    }

    public function deleteSpesialis($idSpesialis)
    {
        $spesialis = spesialis::find($idSpesialis);

        $result = $spesialis->delete();

        return redirect('/addSpesialis');
    }
}
