<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
	use Notifiable;
	protected $table = 'admins';
	protected $fillable = [
		'name',
		'email',
		'mobile',
		'password',
		'photo_profile',
	];

	protected $perPage = 10;

	protected $hidden = ['password'];

}
