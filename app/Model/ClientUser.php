<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientUser extends Model
{
    //
    protected $connection='mysql2';
    
    protected $primaryKey='client_id';

	public function getToken($token)
	{
    // return 'slug';
		// $condition=[]	
    // return $this->where('client_token',$token)->first();
    	return $this->where('client_token',$token)->first();

    // return 'client_token';
	}

	public function getDatabaseConfig()
    {
        return $this->hasMany('App\Comment');
    }

}
