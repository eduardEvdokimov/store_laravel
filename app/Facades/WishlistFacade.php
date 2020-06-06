<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class WishlistFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Services\Wishlist';
    }
}
