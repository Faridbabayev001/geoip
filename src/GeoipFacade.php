<?php

namespace FaridBabayev\Geoip;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FaridBabayev\Geoip\Skeleton\SkeletonClass
 */
class GeoipFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geoip';
    }
}
