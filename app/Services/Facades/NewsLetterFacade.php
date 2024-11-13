<?php
namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class NewsLetterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'NewsLetterService';
    }
}