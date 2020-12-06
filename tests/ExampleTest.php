<?php

namespace Alphabotics\LaravelRedisManager\Tests;

use Orchestra\Testbench\TestCase;
use Alphabotics\LaravelRedisManager\LaravelRedisManagerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelRedisManagerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
