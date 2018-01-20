<?php

namespace AndreyOrs\BehatBootstrap;

use \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class Service
{
    const CONFIGURATION_KEY = 'bootstrap';

    /**
     * @param ArrayNodeDefinition $definition
     *
     * @throws \RuntimeException
     */
    public function configure(ArrayNodeDefinition $definition)
    {
        $definition
            ->children()
                ->arrayNode(self::CONFIGURATION_KEY)
                    ->prototype('array')
                        ->beforeNormalization()
                            ->ifString()
                                ->then(function ($v) {
                                    return [
                                        'command' => $v,
                                    ];
                                })
                    ->end()
                    ->children()
                        ->scalarNode('command')
                            ->isRequired()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Include configured bootstrap file.
     *
     * @param array $config
     */
    public function load(array $config)
    {
        $commands = \array_key_exists(self::CONFIGURATION_KEY, $config) ? $config[self::CONFIGURATION_KEY] : [];

        if (empty($commands)) {
            return;
        }

        foreach ($commands as $cmd) {
            shell_exec($cmd['command']);
        }
    }
}
