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
         Schema::create('kejadian_bencana', function (Blueprint $table) {
        $table->increments('kejadian_id');
        $table->string('jenis_bencana', 100);
        $table->date('tanggal')->nullable();
        $table->text('lokasi_text')->nullable();
        $table->string('rt', 10)->nullable();
        $table->string('rw', 10)->nullable();
        $table->text('dampak')->nullable();
        $table->string('status_kejadian', 50)->default('baru');
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
