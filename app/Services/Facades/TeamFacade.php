<?php
namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class TeamFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'TeamService';
    }
}