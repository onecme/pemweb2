<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table -> id();
            $table -> string('kode');
            $table -> string('nama');
            $table -> string('tmp_lahir');
            $table -> date('tgl_lahir');
            $table -> enum('gender',['L','P']);
            $table -> string('email');
            $table -> text('alamat');
            $table -> unsignedBigInteger('kelurahan_id');

            $table->timestamps();
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
