<?php

namespace AndreyOrs\BehatBootstrap;

use \PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    /**
     * @var Service
     */
    private $service;

    /**
     * Set up service
     */
    public function setUp()
    {
        $this->service = new Service();
    }

    /**
     * @test
     */
    public function itShouldSkipEmptyCommands()
    {
        self::assertNull($this->service->load([]));
    }
}
