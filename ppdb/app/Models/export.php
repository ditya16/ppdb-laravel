<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Export extends Model
{
    use HasFactory;

    public static function getExportData()
    {
        return DB::table('users')
            ->where('role', '=', 2)
            ->join('biodata', 'users.id', '=', 'biodata.users')
            ->join('dataortu', 'users.id', '=', 'dataortu.users')
            ->join('datapendukung', 'users.id', '=', 'datapendukung.users')
            ->select('users.*', 'biodata.*', 'dataortu.*', 'datapendukung.*') // opsional tapi disarankan
            ->get();
    }
}
