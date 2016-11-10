<?php

namespace CRUX\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class UserAccountManager extends Model
{
    	public static function deleteUsers(String $id){
		
		$exist = DB::table('users')->where('id',$id)->first();
		
		if($exist==null){
		return false;
		}
		
		else{
			
		DB::table('users')->where('id',$id)->delete();	
		
		return true;
		}
	}
}
