<?php

namespace CRUX;

use Illuminate\Database\Eloquent\Model;

class FacebookUser extends Model
{
    //
	protected $fillable = ['name','email','facebook_id','avatar'];
}
