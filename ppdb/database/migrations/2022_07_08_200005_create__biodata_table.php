<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users')->unsigned();
            $table->string('nama_panggilan',20);
            $table->string('tmp_lahir',100);
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin',['Laki-laki','Perempuan']);
            $table->string('anak_ke',50);
            $table->string('jml_sdr_kandung',100);
            $table->string('jml_sdr_tiri',100);
            $table->text('alamat');
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
        Schema::table('Biodata', function (Blueprint $table) {
            //
        });
    }
}
