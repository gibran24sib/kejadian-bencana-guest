<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp', 16)->unique(); // No KTP unik
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']); // L untuk Laki-laki, P untuk Perempuan
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('warga');
    }
};
