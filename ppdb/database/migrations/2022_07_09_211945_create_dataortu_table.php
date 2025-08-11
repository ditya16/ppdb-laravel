<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataortuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataortu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users')->unsigned();
            $table->string('nama_ayah',100);
            $table->string('ktp_ayah',100);
            $table->string('tmp_lahir_ayah',100);
            $table->date('tgl_lahir_ayah');
            $table->enum('pendidikan_ayah',['SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3']);
            $table->string('pekerjaan_ayah',50);
            $table->enum('agama_ayah',['Islam','Budha','Kristen','Hindu','Khonghucu','Katolik']);
            $table->string('alamat_ayah',100);
            $table->string('nama_ibu',100);
            $table->string('ktp_ibu',100);
            $table->string('tmp_lahir_ibu',100);
            $table->date('tgl_lahir_ibu');
            $table->enum('pendidikan_ibu',['SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3']);
            $table->string('pekerjaan_ibu',50);
            $table->enum('agama_ibu',['Islam','Budha','Kristen','Hindu','Khonghucu','Katolik']);
            $table->string('alamat_ibu',100);
            $table->string('kk',100);
            $table->string('nama_wali',100);
            $table->string('tmp_lahir_wali',100);
            $table->date('tgl_lahir_wali');
            $table->string('pekerjaan_wali',50);
            $table->enum('agama_wali',['Islam','Budha','Kristen','Hindu','Khonghucu','Katolik']);
            $table->string('alamat_wali',100);
            $table->string('nomor_hp',100);
            $table->timestamps();
            $table->foreign('users')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('dataortu');
    }
}
