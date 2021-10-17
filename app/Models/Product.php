<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = array();

    protected $fillable = [
        'name', 'sku', 'category_id', 'price', 'brand' , 'qty', 'image' ,'description' ,'status',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
