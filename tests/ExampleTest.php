<?php

namespace FaridBabayev\Geoip\Tests;

use PHPUnit\Framework\TestCase;
use FaridBabayev\Geoip\GeoipServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GeoipServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
