<?php

namespace Tests\AndreyOrs\BehatBootstrap;

use AndreyOrs\BehatBootstrap\Loader;

class LoaderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Loader
     */
    private $loader;

    public function setUp()
    {
        $this->loader = new Loader();
    }

    /**
     * @test
     */
    public function itShouldReturnCorrectConfigurationKey()
    {
        self::assertSame('bootstrap', $this->loader->getConfigKey());
    }
}
