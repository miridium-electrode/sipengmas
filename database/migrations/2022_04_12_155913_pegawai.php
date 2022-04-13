<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 50);
            $table->string('nama', 255);
            $table->string('gelar_dpn', 7);
            $table->string('gelar_blk', 50);
            $table->string('username', 255);
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('agama_id')->constrained('agama');
            $table->foreignId('jurusan_id')->constrained('jurusan');
            $table->foreignId('staff_id')->constrained('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
