<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tari_id');
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->string('jabatan');
            $table->string('status');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taris');
    }
}