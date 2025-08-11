<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataortu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class DataortuController extends Controller
{
    public function index(){
        $dt1 = dataortu::where('users', Auth::user()->id)->first();
        $cek1 = dataortu::where('users', Auth::user()->id)->count();
        return view('dashboard.calonsiswa.dataortu', compact('dt1','cek1'));
    }
    public function store(Request $request, $id){

        $data['users']=$id;
        $data['nama_ayah']= $request->nama_ayah;
        $data['ktp_ayah']= $request->ktp_ayah;
        $data['tmp_lahir_ayah']= $request->tmp_lahir_ayah;
        $data['tgl_lahir_ayah']= $request->tgl_lahir_ayah;
        $data['pendidikan_ayah']= $request->pendidikan_ayah;
        $data['pekerjaan_ayah']= $request->pekerjaan_ayah;
        $data['agama_ayah']= $request->agama_ayah;
        $data['alamat_ayah']= $request->alamat_ayah;
        $data['nama_ibu']= $request->nama_ibu;
        $data['ktp_ibu']= $request->ktp_ibu;
        $data['tmp_lahir_ibu']= $request->tmp_lahir_ibu;
        $data['tgl_lahir_ibu']= $request->tgl_lahir_ibu;
        $data['pendidikan_ibu']= $request->pendidikan_ibu;
        $data['pekerjaan_ibu']= $request->pekerjaan_ibu;
        $data['agama_ibu']= $request->agama_ibu;
        $data['alamat_ibu']= $request->alamat_ibu;
        $data['nama_wali']= $request->nama_wali;
        $data['tmp_lahir_wali']= $request->tmp_lahir_wali;
        $data['tgl_lahir_wali']= $request->tgl_lahir_wali;
        $data['pekerjaan_wali']= $request->pekerjaan_wali;
        $data['agama_wali']= $request->agama_wali;
        $data['alamat_wali']= $request->alamat_wali;
        $data['kk']= $request->kk;
        $data['nomor_hp']= $request->nomor_hp;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        dataortu::insert($data);

        return redirect('/datasiswa')->with('success','data orang tua berhasil ditambahkan');
    }
    public function update(Request $request, $id){

        $data['nama_ayah']= $request->nama_ayah;
        $data['ktp_ayah']= $request->ktp_ayah;
        $data['tmp_lahir_ayah']= $request->tmp_lahir_ayah;
        $data['tgl_lahir_ayah']= $request->tgl_lahir_ayah;
        $data['pendidikan_ayah']= $request->pendidikan_ayah;
        $data['pekerjaan_ayah']= $request->pekerjaan_ayah;
        $data['agama_ayah']= $request->agama_ayah;
        $data['alamat_ayah']= $request->alamat_ayah;
        $data['nama_ibu']= $request->nama_ibu;
        $data['ktp_ibu']= $request->ktp_ibu;
        $data['tmp_lahir_ibu']= $request->tmp_lahir_ibu;
        $data['tgl_lahir_ibu']= $request->tgl_lahir_ibu;
        $data['pendidikan_ibu']= $request->pendidikan_ibu;
        $data['pekerjaan_ibu']= $request->pekerjaan_ibu;
        $data['agama_ibu']= $request->agama_ibu;
        $data['alamat_ibu']= $request->alamat_ibu;
        $data['nama_wali']= $request->nama_wali;
        $data['tmp_lahir_wali']= $request->tmp_lahir_wali;
        $data['tgl_lahir_wali']= $request->tgl_lahir_wali;
        $data['pekerjaan_wali']= $request->pekerjaan_wali;
        $data['agama_wali']= $request->agama_wali;
        $data['kk']= $request->kk;
        $data['alamat_wali']= $request->alamat_wali;
        $data['nomor_hp']= $request->nomor_hp;
        $data['updated_at'] = date('Y-m-d H:i:s');
        dataortu::where('users',$id)->update($data);
        return redirect('/datasiswa')->with('success','data orang tua berhasil di update');
    }
}
