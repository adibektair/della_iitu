<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['user_id', 'date', 'start_city_id', 'destination_city_id', 'status_id', 'driver_id', 'category_id', 'cargo_photo', 'cargo_name', 'cargo_weight', 'cargo_height', 'cargo_width', 'cargo_length', 'price', 'comment'];

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
