<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use App\Models\dataortu;
use Illuminate\Support\Facades\Auth;

class CalonsiswaController extends Controller
{
   public function index(){
   
        return view('dashboard.datasiswa');
   }
}
