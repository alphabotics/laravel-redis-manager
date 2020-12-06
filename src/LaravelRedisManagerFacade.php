<?php

namespace Alphabotics\LaravelRedisManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alphabotics\LaravelRedisManager\Skeleton\SkeletonClass
 */
class LaravelRedisManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-redis-manager';
    }
}
