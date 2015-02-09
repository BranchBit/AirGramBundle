<?php

namespace BranchBit\AirGramBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('branch_bit_air_gram');

        $rootNode
            ->children()
            ->arrayNode('apis')
            ->prototype('array')
                        ->children()
                            ->scalarNode('key')->end()
                            ->scalarNode('secret')->end()
                        ->end()
                ->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
