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
            $table->string('lampiran', 255)->nullable();
            $table->string('judul', 255);
            $table->timestampTz('periode');
            $table->decimal('dana');
            $table->foreignId('id_partisipan')->constrained('partisipan');
            $table->foreignId('id_prodi')->constrained('prodi');
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
