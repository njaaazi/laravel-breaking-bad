<?php

namespace Njaaazi\BreakingBad;

use Njaaazi\BreakingBad\Commands\BreakingBadCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BreakingBadServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-breaking-bad')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-breaking-bad_table')
            ->hasCommand(BreakingBadCommand::class);
    }
}
