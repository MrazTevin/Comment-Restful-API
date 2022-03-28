<?php

namespace   App\Traits;


// gets the users Ip address
class UtcTime 
{


    public function getTime()
    {

        date_default_timezone_set('UTC');
        $time = date(DATE_RFC850);

        return $time;
    }
  
}