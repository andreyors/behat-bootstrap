<?php

namespace AndreyOrs\BehatBootstrap;

class BootstrapServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var BootstrapService
     */
    private $service;

    /**
     * Set up service
     */
    public function setUp()
    {
        $this->service = new BootstrapService();
    }

    /**
     * @test
     */
    public function itShouldSkipEmptyCommands()
    {
        self::assertFalse(
            $this->service->load([])
        );
    }
}
