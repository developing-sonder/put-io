<?php

namespace Developing Sonder\Putio;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Developing Sonder\Putio\Commands\PutioCommand;

class PutioServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('putio')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_putio_table')
            ->hasCommand(PutioCommand::class);
    }
}
