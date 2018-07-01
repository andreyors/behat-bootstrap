<?php

namespace Tests\AndreyOrs\BehatBootstrap;

use AndreyOrs\BehatBootstrap\BootstrapService;

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
     * @dataProvider getWrongScenarios
     *
     * @param array $config
     */
    public function itFailsOnWrongConfiguration(array $config)
    {
        self::assertFalse($this->service->load($config));
    }

    /**
     * @test
     */
    public function itShouldSkipWithCorrectKeyWithWrongValue()
    {
        self::assertTrue(
            $this->service->load(
                [
                    BootstrapService::CONFIGURATION_KEY => [
                        [
                            'wrong-key' => 'ls -la',
                        ],
                    ],
                ]
            )
        );
    }

    public function getWrongScenarios()
    {
        return [
            [
                'empty array' => [],
            ],
            [
                'wrong config' => ['wrong-key' => []],
            ],
            [
                'empty config' => [BootstrapService::CONFIGURATION_KEY => []],
            ],
        ];
    }

}
