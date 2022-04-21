<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partisipan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partisipan', function (Blueprint $table) {
            $table->foreignId('id_pengmas')->constrained('pengmas');
            $table->string('nip');
            $table->boolean('ketua');
            $table->foreign('nip')->references('nip')
            ->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partisipan');
    }
}
