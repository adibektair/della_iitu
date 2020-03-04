<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
	use HasApiTokens,Notifiable; 

	protected $fillable = ['first_name', 'last_name', 'role_id', 'email', 'password', 'token'];

	public function role(){
		return $this->belongsTo(Role::class, 'role_id');
	}

}
