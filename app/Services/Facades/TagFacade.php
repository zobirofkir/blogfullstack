<?php
namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class TagFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return "TagService";
    }
}
