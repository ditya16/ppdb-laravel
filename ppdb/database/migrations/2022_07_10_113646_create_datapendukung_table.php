<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendukungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendukung', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users')->unsigned();
            $table->string('asal_sekolah',100);
            $table->string('alamat_sekolah',100);
            $table->string('npsn_sekolah',100);
            $table->string('kip',100)->nullable();
            $table->string('kps',100)->nullable();
            $table->string('kks',100)->nullable();
            $table->string('pkh',100)->nullable();
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
        Schema::dropIfExists('datapendukung');
    }
}
