<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
	public const STATUS_IN_WAITING = 1;
	public const STATUS_ACCEPTED = 2;
	public const STATUS_CANCELED = 3;
	public const STATUS_FINISHED = 4;


	protected $fillable = ['name'];
    //
}
