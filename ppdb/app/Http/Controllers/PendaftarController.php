<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PendaftarExport;
use Illuminate\Support\Facades\DB;
use App\Models\biodata;
use App\Models\dataortu;
use App\Models\datapendukung;
use App\Models\User;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class PendaftarController extends Controller
{
    public function index(){
        $data = DB::table('users')
                ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
                ->leftjoin('dataortu', 'users.id', '=', 'dataortu.users')
                ->leftjoin('datapendukung', 'users.id', '=', 'datapendukung.users')
                ->where('role', '=',2)
                ->get();
        // $biodata = biodata::where('users', Auth::user()->id)->count();
        // $dataortu = dataortu::where('users', Auth::user()->id)->count();
        // $datapendukung = datapendukung::where('users', Auth::user()->id)->count();
        return view('dashboard.admin.pendaftar', compact('data'));
    }
    public function laporan(){
        return view('dashboard.admin.laporan');
    }
    public function akun(){
        $akun = UserModel::all() ->where('role', '=',2);

        return view('dashboard.admin.akun', compact('akun'));
    }
    public function tambahakun(){
        $data = DB::table('users')
        ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
        ->leftjoin('dataortu', 'users.id', '=', 'dataortu.users')
        ->leftjoin('datapendukung', 'users.id', '=', 'datapendukung.users')
        ->where('role', '=',2)
        ->get();
        return view('dashboard.admin.tambahakun', compact('data'));
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

        return redirect('/akun')->with('success','pendaftaran berhasil ditambahkan');
    }
    public function lihat(Request $request, $users){
        $data = DB::table('users')->where('users.id', $users)
        ->Join('biodata', 'users.id', '=', 'biodata.users')
        ->Join('dataortu', 'users.id', '=', 'dataortu.users')
        ->Join('datapendukung', 'users.id', '=', 'datapendukung.users')
        ->get();
        return view('dashboard.admin.lihat', compact('data'));
    }
    public function excel(){
        return Excel::download(new PendaftarExport, 'datapendaftar.xls');
    }
    public function hapus(Request $request, $users){
        DB::table('users')->where('users.id', $users)->delete();
        return redirect('/pendaftar')->with('success','Data Pendaftar  berhasil dihapus');
    }
    public function hapusakun($id){
        $hapusakun = UserModel::destroy($id);
        return redirect('/akun')->with('success','Data Pendaftar  berhasil dihapus');
    }
}
