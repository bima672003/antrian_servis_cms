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
    Schema::create('transaksis', function (Blueprint $table) {
        $table->string('nama_pelanggan'); // manual input
        $table->unsignedBigInteger('antrian_id');
        $table->unsignedBigInteger('kendaraan_id');
        $table->decimal('biaya', 10, 2);
        $table->string('keterangan')->nullable();
        $table->timestamps();

        $table->foreign('antrian_id')->references('id')->on('antrians')->onDelete('cascade');
        $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
