<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DaftarPengmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pengmas', function (Blueprint $table) {
            $table->string('nip');
            $table->foreignId('pengmas_id')->constrained('pengmas');
            $table->boolean('ketua');

            $table->foreign('nip')->references('nip')
            ->on('pegawai')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pengmas');
    }
}
