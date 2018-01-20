<?php

namespace AndreyOrs\BehatBootstrap;

use Symfony\Component\DependencyInjection\ContainerBuilder;

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
