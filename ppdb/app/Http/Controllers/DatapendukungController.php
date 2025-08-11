<?php

namespace App\Http\Controllers;

use App\Models\datapendukung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DatapendukungController extends Controller
{
    public function index(){
        $dt3 = datapendukung::where('users', Auth::user()->id)->first();
        $cek3 = datapendukung::where('users', Auth::user()->id)->count();
        return view('dashboard.calonsiswa.datapendukung', compact('dt3','cek3'));
    }
    public function store(Request $request, $id){

        $data['users']=$id;
        $data['asal_sekolah']= $request->asal_sekolah;
        $data['alamat_sekolah']= $request->alamat_sekolah;
        $data['npsn_sekolah']= $request->npsn_sekolah;
        $data['kip']= $request->kip;
        $data['kks']= $request->kks;
        $data['kps']= $request->kps;
        $data['pkh']= $request->pkh;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        datapendukung::insert($data);
        return redirect('/datasiswa')->with('success','biodata siswa berhasil ditambahkan');
    }
    public function update(Request $request, $id){
        $data['asal_sekolah']= $request->asal_sekolah;
        $data['alamat_sekolah']= $request->alamat_sekolah;
        $data['npsn_sekolah']= $request->npsn_sekolah;
        $data['kip']= $request->kip;
        $data['kks']= $request->kks;
        $data['kps']= $request->kps;
        $data['pkh']= $request->pkh;
        $data['updated_at'] = date('Y-m-d H:i:s');
        datapendukung::where('users',$id)->update($data);
        return redirect('/datasiswa')->with('success','biodata siswa berhasil diupdate');

    }
}
