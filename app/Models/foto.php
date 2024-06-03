<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    use HasFactory;

    protected $casta = [
        "create_at"=> "datetime",
        "updated_at"=> "datetime"
    ];

    protected $fillable = [
        'nama_image',
        'image',
        'updated_at',
        'created_at',
    
    ];

}
