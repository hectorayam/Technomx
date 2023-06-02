<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'price',
        'image',
        'description',
        'specification',
        'status',
        'subcategory_id',
        'keyword',
        
    ];

    public function img(){
        return $this->hasMany('App\Models\Image');
    }

    public function synonym(){
        return $this->hasMany('App\Models\Synonym');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory','subcategory_id','id');
    }
    
    public function orderitems(){
        return $this->hasMany('App\Models\OrderItem');
    }
  
  

}
