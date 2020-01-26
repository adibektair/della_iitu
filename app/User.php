<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $fillable = ['first_name', 'last_name', 'role_id', 'email', 'password', 'token'];

	public function role(){
		return $this->belongsTo(Role::class, 'role_id');
	}

}
