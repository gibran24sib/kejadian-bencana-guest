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
    Schema::create('posko', function (Blueprint $table) {
        $table->increments('posko_id');
        $table->unsignedInteger('kejadian_id');
        $table->string('nama', 100);
        $table->string('alamat', 255);
        $table->string('kontak', 50)->nullable();
        $table->string('penanggung_jawab', 100);
        $table->timestamps();

        $table->foreign('kejadian_id')
              ->references('kejadian_id')
              ->on('kejadian_bencana')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
