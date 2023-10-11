<?php

namespace Sitesurfer\TCOsdata;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sitesurfer\TCOsdata\Commands\TCOsdataCommand;

class TCOsdataServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tc-osdata')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tc-osdata_table')
            ->hasCommand(TCOsdataCommand::class);
    }
}
