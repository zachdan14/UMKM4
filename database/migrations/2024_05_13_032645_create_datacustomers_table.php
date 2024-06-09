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
            $table->string('id_user')->unique();
            $table->string('nama_user');
            $table->string('email');
            $table->char('kontak', 20);
            $table->string('alamat');
            $table->enum('pembayaran', ['qris', 'cod']);
            $table->enum('tipe_layanan', ['Prewedding', 'Foto Wisuda', 'Mahasiswa/Siswa', 'Lainnya']);
            $table->date('tanggal');
            $table->enum('status_pemesanan', ['Message', 'Acc', 'Process']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacustomer'); // Change here
    }
};
