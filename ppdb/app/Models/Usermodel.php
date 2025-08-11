<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Usermodel extends Model
{
    protected $table = 'users';
    public function allData(){
        return DB::table('users')->get();
    }
}
