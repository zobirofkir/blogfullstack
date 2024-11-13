<?php

namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class BlogFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'BlogService';
    }
}