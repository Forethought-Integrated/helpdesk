<?php

namespace App\Http\Middleware;

use Closure;

use App\Model\ClientSetting;

class ServiceAuthorization
{
    private $clientSetting;

    public function __construct()
    {
        $this->clientSetting = new ClientSetting();
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        
        $clientRecord=$this->clientSetting->getToken($request->bearerToken());
        if($clientRecord)
        {
            config(['database.connections.mysql.database'=>$clientRecord['client_db_database']]);
            // config(['database.default'=>$clientRecord['client_db_connection']]);
            return $next($request);
        }
        else
        {
            return response('Unauthorized.', 401);
        }


    }
}
