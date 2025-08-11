<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BiodataController extends Controller
{
    public function index(){
        $dt = biodata::where('users', Auth::user()->id)->first();
        $cek = biodata::where('users', Auth::user()->id)->count();
        return view('dashboard.calonsiswa.biodata', compact('dt','cek'));
    }
    public function store(Request $request, $id){
        $this->validate($request,[
            'nama_panggilan'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jns_kelamin'=>'required',
            'anak_ke'=>'required',
            'jml_sdr_kandung'=>'required',
            'jml_sdr_tiri'=> 'required',
            'alamat'=>'required',
        ]);
        $data['users']=$id;
        $data['nama_panggilan']= $request->nama_panggilan;
        $data['tmp_lahir']= $request->tmp_lahir;
        $data['tgl_lahir']= $request->tgl_lahir;
        $data['jns_kelamin']= $request->jns_kelamin;
        $data['anak_ke']= $request->anak_ke;
        $data['jml_sdr_kandung']= $request->jml_sdr_kandung;
        $data['jml_sdr_tiri']= $request->jml_sdr_tiri;
        $data['alamat']= $request->alamat;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        biodata::insert($data);
        return redirect('/datasiswa')->with('success','biodata siswa berhasil ditambahkan');
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'nama_panggilan'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jns_kelamin'=>'required',
            'anak_ke'=>'required',
            'jml_sdr_kandung'=>'required',
            'jml_sdr_tiri'=> 'required',
            'alamat'=>'required',
        ]);
            
        $data['nama_panggilan']= $request->nama_panggilan;
        $data['tmp_lahir']= $request->tmp_lahir;
        $data['tgl_lahir']= $request->tgl_lahir;
        $data['jns_kelamin']= $request->jns_kelamin;
        $data['anak_ke']= $request->anak_ke;
        $data['jml_sdr_kandung']= $request->jml_sdr_kandung;
        $data['jml_sdr_tiri']= $request->jml_sdr_tiri;
        $data['alamat']= $request->alamat;
        $data['updated_at'] = date('Y-m-d H:i:s');
        biodata::where('users',$id)->update($data);

        return redirect('/datasiswa')->with('success','biodata siswa berhasil diupdate');

    }

}
