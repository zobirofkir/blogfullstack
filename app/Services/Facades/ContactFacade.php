<?php
namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class ContactFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ContactService';
    }
}