<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'yt_link',
        'cellphone',
        'telephone',
        'email',
        'address',
        'title',
        'caption',
        'description',
    ];
}
