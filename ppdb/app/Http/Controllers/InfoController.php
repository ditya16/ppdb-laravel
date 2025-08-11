<?php

namespace App\Http\Controllers;

use App\Models\infosekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InfoController extends Controller
{
    public function infosekolah(){
        $dt = infosekolah::where('users', Auth::user()->id)->first();
        $cek = infosekolah::where('users', Auth::user()->id)->count();
        return view('dashboard.admin.infosekolah', compact('dt','cek'));
    }
    public function storesekolah(Request $request, $id){
        $this->validate($request,[
            'nama_kepsek'=>'required',
            'nama_sekolah'=>'required',
            'npsn_sekolah'=>'required',
            'nsm_sekolah'=>'required',
            'akreditasi'=>'required|max:2',
            'alamat_sekolah'=>'required',
            'email_sekolah'=>'required',
            'telp_sekolah'=>'required',
            'status'=>'required',
            'visi'=>'required',
            'misi'=>'required',
            'thn_ajaran'=>'required',
        ]);
        $data['users']=$id;
        $data['nama_kepsek']= $request->nama_kepsek;
        $data['nama_sekolah']= $request->nama_sekolah;
        $data['npsn_sekolah']= $request->npsn_sekolah;
        $data['nsm_sekolah']= $request->nsm_sekolah;
        $data['akreditasi']= $request->akreditasi;
        $data['alamat_sekolah']= $request->alamat_sekolah;
        $data['email_sekolah']= $request->email_sekolah;
        $data['telp_sekolah']= $request->telp_sekolah;
        $data['status']= $request->status;
        $data['visi']= $request->visi;
        $data['misi']= $request->misi;
        $data['thn_ajaran']= $request->thn_ajaran;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        infosekolah::insert($data);
        return redirect('/infosekolah')->with('success','Info Sekolah berhasil ditambahkan');
    }
    public function updatesekolah(Request $request, $id){
        $this->validate($request,[
            'nama_kepsek'=>'required',
            'nama_sekolah'=>'required',
            'npsn_sekolah'=>'required',
            'nsm_sekolah'=>'required',
            'akreditasi'=>'required|max:2',
            'alamat_sekolah'=>'required',
            'email_sekolah'=>'required',
            'telp_sekolah'=>'required',
            'status'=>'required',
            'visi'=>'required',
            'thn_ajaran'=>'required',
            'misi'=>'required',
        ]);
        $data['nama_kepsek']= $request->nama_kepsek;
        $data['nama_sekolah']= $request->nama_sekolah;
        $data['npsn_sekolah']= $request->npsn_sekolah;
        $data['nsm_sekolah']= $request->nsm_sekolah;
        $data['akreditasi']= $request->akreditasi;
        $data['alamat_sekolah']= $request->alamat_sekolah;
        $data['email_sekolah']= $request->email_sekolah;
        $data['telp_sekolah']= $request->telp_sekolah;
        $data['status']= $request->status;
        $data['visi']= $request->visi;
        $data['misi']= $request->misi;
        $data['thn_ajaran']= $request->thn_ajaran;
        $data['updated_at'] = date('Y-m-d H:i:s');
        infosekolah::where('users',$id)->update($data);
        return redirect('/infosekolah')->with('success','Info Sekolah berhasil diupdate');
    }

}
