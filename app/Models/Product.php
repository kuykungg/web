<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name',
        'price',
        'detail',
        'image',
        'brand_id',
        'size',
        'color',
        'tool',
        'viewcount',
        'created_at'
    ];
}
