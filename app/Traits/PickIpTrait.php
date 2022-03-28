<?php

namespace   App\Traits;


// gets the users Ip address
class PickIpTrait 
{


    public function getClientIp()
    {

        $ipAddress = ' ';

        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];  
        } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ipAddress=$_SERVER['REMOTE_ADDR'];
        }

        
        return $ipAddress;
    }
  
}