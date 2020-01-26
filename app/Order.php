<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['comment', 'user_id', 'date', 'start_city_id', 'destination_city_id', 'price', 'status_id', 'category_id', 'driver_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function driver(){
    	return $this->belongsTo(User::class, 'driver_id');
    }

    public function startCity(){
    	return $this->belongsTo(City::class, 'start_city_id');
    }

    public function destinationCity(){
    	return $this->belongsTo(City::class, 'destination_city_id');
    }

    public function status(){
	    return $this->belongsTo(OrderStatus::class, 'status_id');
    }
    public function category(){
	    return $this->belongsTo(Category::class, 'category_id');
    }


}
