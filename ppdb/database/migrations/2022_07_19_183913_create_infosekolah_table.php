<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infosekolah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users')->unsigned();
            $table->string('nama_kepsek',100);
            $table->string('nama_sekolah',100);
            $table->string('npsn_sekolah',100);
            $table->string('nsm_sekolah',100);
            $table->string('akreditasi',100);
            $table->string('alamat_sekolah',100);
            $table->string('email_sekolah',100);
            $table->string('telp_sekolah',100);
            $table->string('status',100);
            $table->string('visi',2000);
            $table->string('misi',2000);
            $table->string('thn_ajaran');
            $table->foreign('users')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infosekolah');
    }
}
