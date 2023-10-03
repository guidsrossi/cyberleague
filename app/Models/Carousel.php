<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carousel extends Model
{
    use HasFactory, SoftDeletes;

    public function topics()
    {
        return $this->hasMany(CourseTopic::class);
    }
}
