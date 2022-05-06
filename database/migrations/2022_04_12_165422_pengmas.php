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
            $table->text('judul');
            $table->decimal('dana');
            $table->foreignId('prodi_id')->constrained('prodi');
            $table->foreignId('departemen_id')->constrained('departemen');
            $table->foreignId('periode_id')->constrained('periode');
            $table->foreignId('skema_id')->constrained('skema');
            $table->foreignId('jenjang_id')->constrained('jenjang');
            $table->fullText('judul');
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
