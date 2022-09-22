<?php

namespace TallEcommerce\Product\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallEcommerce\Product\Product
 */
class Product extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TallEcommerce\Product\Product::class;
    }
}
