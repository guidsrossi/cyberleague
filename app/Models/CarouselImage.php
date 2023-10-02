<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    public function up()
{
    Schema::create('carousel_images', function (Blueprint $table) {
        $table->id();
        $table->string('image_path');
        $table->string('image_name');
        $table->timestamps();
    });
}

}
