<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengmas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->time('waktu');
            $table->text('dokumentasi');
            $table->string('nama_ketua', 255);
            $table->timestampTz('deadline');
            $table->foreignId('kategori_id')->constrained('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengmas');
    }
}
