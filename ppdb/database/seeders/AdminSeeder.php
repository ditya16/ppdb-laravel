<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                'role'=> '1',
                'name'=> 'Admin',
                'nisn' => '1',
                'email'=> 'admin2403@gmail.com',
                'id_registrasi'=>'0',
                'email_verified_at'=> now(),
                'password'=> Hash::make('admin0987'),
                'photo' => 'logo.png',
                'remember_token'=> Str::random(10),
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
            ]
            );
    }
}
