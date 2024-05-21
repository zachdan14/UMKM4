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
        Schema::create('datacustomers', function (Blueprint $table) { // Change here
            $table->id();
            $table->string('idpesanan')->unique()->default(\Illuminate\Support\Str::uuid()->toString());
            $table->string('nama_user');
            $table->string('email');
            $table->char('kontak', 20);
            $table->string('alamat');
            $table->enum('pembayaran', ['qris', 'cod']);
            $table->enum('jam_booking', ['08:00-12:00', '12:00-15:00', '15:00-18:00', '18:00-20:00']);
            $table->enum('paket', ['Prewedding', 'Foto Wisuda', 'Mahasiswa/Siswa', 'Lainnya']);
            $table->date('tanggal');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacustomers'); // Change here
    }
};
