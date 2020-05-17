<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ViewedProductFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Services\ViewedProduct';
    }
}
