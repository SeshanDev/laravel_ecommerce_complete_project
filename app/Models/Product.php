<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    
    protected $fillable=[
        'product_id',
        'category_id',
        'brand_name',
        'model_name',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'quantity',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'ram',
        'processor',
        'storage',
        'type',
        'ports',
        'graphic',
        'display',
        'color',
        'chipset',
        'memory_slots',
        'operating_system',
        'other_info',
         
        

    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    
}
