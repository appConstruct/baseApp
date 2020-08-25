<?php

namespace Appconstruct\Baseapp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appconstruct\Baseapp\Skeleton\SkeletonClass
 */
class BaseappFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'baseapp';
    }
}
