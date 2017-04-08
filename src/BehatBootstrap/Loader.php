<?php

namespace AndreyOrs\BehatBootstrap;

use Behat\Testwork\ServiceContainer\Extension;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Loader implements Extension
{
    /**
     * @var Service
     */
    private $service;

    public function __construct()
    {
        $this->service = new Service();
    }

    /**
     * @param ContainerBuilder $container
     * @param array            $params
     */
    public function load(ContainerBuilder $container, array $params)
    {
        $this->service->load($params);
    }

    /**
     * Setups configuration for the extension.
     *
     * @param ArrayNodeDefinition $builder
     */
    public function configure(ArrayNodeDefinition $definition)
    {
        $this->service->configure($definition);
    }

    /**
     * Returns the extension config key.
     * @return string
     */
    public function getConfigKey()
    {
        return Service::KEY;
    }

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
    }

    /**
     * Initializes other extensions.
     * This method is called immediately after all extensions are activated but
     * before any extension `configure()` method is called. This allows extensions
     * to hook into the configuration of other extensions providing such an
     * extension point.
     *
     * @param ExtensionManager $extensionManager
     */
    public function initialize(ExtensionManager $extensionManager)
    {
    }
}
