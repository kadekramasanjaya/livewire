<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahasInggrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahas_inggris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bahasainggris_id');
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
        Schema::dropIfExists('bahas_inggris');
    }
}