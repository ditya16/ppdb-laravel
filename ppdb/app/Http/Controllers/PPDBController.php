<?php

namespace App\Http\Controllers;

use App\Models\infoppdb;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PPDBController extends Controller
{
    public function index1(){
        $data = DB::table('users')
        ->leftJoin('infosekolah', 'users.id', '=', 'infosekolah.users')
        ->get();
        return view('layout.website',compact('data'));
    }
    public function index(){
            return view('ppdb.index');

    }
    public function loginsiswa(){
        return view('layouts.loginsiswa');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'nisn'=>'required',
            'email'=>'required',
        ]);
        $data['name'] = $request->nama;
        $data['nisn'] = $request->nisn;
        $data['email'] = $request->email;
        $data['role']= '2';
        $data['password'] = bcrypt($request->nisn);
        $data['id_registrasi'] = 'DAF-'.date('YmdHis');


        //cek photo
        $file = $request->file('photo');
        if($file){
            $file->move('uploads', $file->getClientOriginalName());
            $data['photo'] = 'uploads/'.$file->getClientOriginalName();
        }
        User::insert($data);

        return redirect('/')->with('success','pendaftaran berhasil dilakukan silakan login untuk melengkapi formulir');
    }
}
