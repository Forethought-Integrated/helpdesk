<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientSetting extends Model
{
    //
    protected $connection='mysql2';
    
    protected $primaryKey='client_id';

 //    public function getRouteKeyName()
	// {
 //    // return 'slug';
 //    return 'client_token';
	// }

	public function getToken($token)
	{
    // return 'slug';
		
    return $this->where('client_token',$token)->first();

    // return 'client_token';
	}



}
