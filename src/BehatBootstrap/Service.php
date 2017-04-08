<?php

namespace AndreyOrs\BehatBootstrap;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class Service
{
    const KEY = 'bootstrap';

    public function configure(ArrayNodeDefinition $definition)
    {
        $definition
            ->children()
                ->arrayNode(self::KEY)
                    ->prototype('array')
                        ->beforeNormalization()
                        ->ifString()
                        ->then(
                            function ($v) {
                                return [
                                    'command' => $v,
                                ];
                            }
                        )
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
        if (empty($config[self::KEY])) {
            return;
        }

        foreach ($config[self::KEY] as $cmd) {
            shell_exec($cmd['command']);
        }
    }
}
