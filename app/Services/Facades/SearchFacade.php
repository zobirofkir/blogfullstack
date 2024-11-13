<?php
namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class SearchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SearchService';
    }
}