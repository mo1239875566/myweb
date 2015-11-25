<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class MymailFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'MyMailerServices';
    }

}
