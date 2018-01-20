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

    /**
     * @test
     */
    public function itShouldSkipWithWrongKey()
    {
        self::assertFalse(
            $this->service->load(['wrong-key' => []])
        );
    }

    /**
     * @test
     */
    public function itShouldSkipWithCorrectButEmptyKey()
    {
        self::assertFalse(
            $this->service->load([BootstrapService::CONFIGURATION_KEY => []])
        );
    }

    /**
     * @test
     */
    public function itShouldSkipWithCorrectKeyWithWrongValue()
    {
        self::assertTrue(
            $this->service->load([
                BootstrapService::CONFIGURATION_KEY => [
                    [
                        'wrong-key' => 'ls -la',
                    ]
                ]
            ])
        );
    }

}
