<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];

    public function orderitems(){
        return $this->hasMany('App\Models\OrderItem');
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    } 

    public function status(){
        return $this->belongsTo('App\Models\Status','status_id','id');
    }
}
