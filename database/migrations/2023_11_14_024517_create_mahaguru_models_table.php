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
        Schema::create('mahaguru_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('nama_lengkap', 255);
            $table->string('jenis_kelamin', 255);
            $table->string('jabatan_fungsional', 255);
            $table->string('nidn', 255);
            $table->string('ttl', 255);
            $table->string('email', 255);
            $table->string('no_telpon', 255);
            $table->string('agama', 255);
            $table->string('bidang_keahlian', 255);
            $table->string('matkul_diampu', 255);
            $table->string('status', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahaguru_models');
    }
};
