<?php

namespace Njaaazi\BreakingBad\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Njaaazi\BreakingBad\BreakingBadServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Njaaazi\\BreakingBad\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BreakingBadServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-breaking-bad_table.php.stub';
        $migration->up();
        */
    }
}
