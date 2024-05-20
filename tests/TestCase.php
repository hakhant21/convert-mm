<?php

namespace Hakhant\Converter\Tests;

use Hakhant\Converter\ConvertServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ConvertServiceProvider::class
        ];
    }
}