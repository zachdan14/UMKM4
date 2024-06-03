<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Datacustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama_user',
        'email',
        'kontak',
        'alamat',
        'pembayaran',
        'tipe_layanan',
        'tanggal',
        'jam_booking',
    ];
    protected $table='datacustomers';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_user = (string) Str::uuid();
        });
    }
}
