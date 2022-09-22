<?php

namespace TallEcommerce\Product;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TallEcommerce\Product\Commands\ProductCommand;

class ProductServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('product')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_product_table')
            ->hasCommand(ProductCommand::class);
    }
}
