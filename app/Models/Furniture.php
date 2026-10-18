<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $table = 'furnitures';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'category',
        'material',
        'price',
        'dimensions',
        'image',
        'description',
    ];

    public function getPriceFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
