<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $casta = [
        "create_at"=> "datetime",
        "deleted_at"=> "datetime",
        "updated_at"=> "datetime"
    ];

    protected $fillable = [
        'email',
        'nama_user',
        'password',
        'status_aktif',
        'status_publish',
        'updated_at',
        'deleted_at',
        'created_at',
        'updated_by',
        'deleted_by',
        'created_by'
    ];

}
