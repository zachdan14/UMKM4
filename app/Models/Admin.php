<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $casta = [
        "create_at"=> "datetime",
        "deleted_at"=> "datetime",
        "updated_at"=> "datetime"
    ];

    protected $fillable = [
        'email_admin',
        'nama_admin',
        'password_Admin',
        'status_aktif_ad',
        'status_publish_ad',
        'updated_at',
        'deleted_at',
        'created_at',
        'updated_by',
        'deleted_by',
        'created_by'
    ];


}
