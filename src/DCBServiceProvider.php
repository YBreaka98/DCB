<?php

namespace Ybreaka98\DCB;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ybreaka98\DCB\Commands\DCBCommand;

class DCBServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dcb')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dcb_table');
    }
}
