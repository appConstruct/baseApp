<?php

namespace Appconstruct\Baseapp\Tests;

use Orchestra\Testbench\TestCase;
use Appconstruct\Baseapp\BaseappServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BaseappServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
