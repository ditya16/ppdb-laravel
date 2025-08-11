<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index(){
        $dt = User::where('role', 1)->first();
        $data = DB::table('users')
            ->leftJoin('infosekolah', 'users.id', '=', 'infosekolah.users')
            ->where('role', '=',1)
            ->get();
        return view('dashboard.admin.profil', compact('data','dt'));
   }
   public function update(Request $request, $id){
    $this->validate($request,[
        'name'=>'required',
        'email'=>'required',

    ]);

    $data['name']= $request->name;
    $file = $request->file('photo');
        if($file){
            $file->move('uploads', $file->getClientOriginalName());
            $data['photo'] = 'uploads/'.$file->getClientOriginalName();
        }
    $data['email']= $request->email;
    User::where('role', 1)->update($data);

    return redirect('/profil')->with('success','Profil Admin berhasil diupdate');
}

}
