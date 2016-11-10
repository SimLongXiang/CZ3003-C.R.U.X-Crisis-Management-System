<?php

namespace CRUX;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('email','password','name','admin');
	public $timestamps = false;
	
	public function getRememberToken(){
		return '';
	}
	public function setRememberToken($value){
		
	}
	
	public function getRememberTokenName(){
		return 'trash_attribute';
	}
	public function setTrashAttributeAttribute($value){
		
	}
	public function getAuthIdentifier(){
		return $this->getKey();
	}
	
	public function getAuthPassword(){
		
		return $this->password;
	}
	public function routeNotificationForNexmo(){
		
		return '6593829359';
	}
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    
	*/
    protected $hidden = [
        'password', 'remember_token',
    ];

}
