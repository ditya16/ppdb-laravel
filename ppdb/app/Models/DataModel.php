<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{

    public static function getAllUserData()
    {
        return DB::table('users')
            ->leftJoin('biodata', 'users.id', '=', 'biodata.user_id')
            ->leftJoin('dataortu', 'users.id', '=', 'dataortu.user_id')
            ->leftJoin('datapendukung', 'users.id', '=', 'datapendukung.user_id')
            ->select('users.*', 'biodata.*', 'dataortu.*', 'datapendukung.*')
            ->get();
    }
}
