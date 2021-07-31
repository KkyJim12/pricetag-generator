<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'unit', 'barcode', 'image_id'];

    public function get_image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }
}
