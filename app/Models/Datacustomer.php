<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Datacustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'idpesanan',
        'fullname',
        'emailaddress',
        'phone',
        'rincian',
        'pembayaran',
        'paket',
        'tanggal_booking',
        'jam_booking',
        'created_at',
    ];

    protected static function booted()
    {
        static::creating(function ($datacustomer) {
            if (empty($datacustomer->idpesanan)) {
                $datacustomer->idpesanan = Str::uuid()->toString();
            }
        });
    }
}
