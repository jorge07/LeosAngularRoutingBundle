<?php

namespace Leos\AngularRoutingBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('leos_angular_routing');

        $rootNode->children()
                    ->arrayNode('routes')
                        ->isRequired()
                            ->prototype('array')
                                ->children()
                                    ->arrayNode('urlParams')
                                        ->prototype('scalar')->end()
                                    ->end()
                                    ->scalarNode('url')->end()
                                    ->scalarNode('templateUrlPath')->end()
                                    ->scalarNode('templateUrl')->end()
                                    ->arrayNode('views')
                                        ->prototype('array')
                                            ->children()
                                                ->scalarNode('column')->end()
                                                ->scalarNode('viewParent')->end()
                                                ->scalarNode('templateUrlPath')->end()
                                                ->scalarNode('templateUrl')->end()
                                                ->scalarNode('template')->end()
                                                ->arrayNode('urlParams')
                                                    ->prototype('scalar')->end()
                                                ->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->children()
                                    ->arrayNode('childs')
                                        ->prototype('array')
                                            ->children()
                                                ->scalarNode('url')->end()
                                                ->scalarNode('templateUrl')->end()
                                                ->scalarNode('templateUrlPath')->end()
                                                ->scalarNode('template')->end()
                                                ->arrayNode('urlParams')
                                                    ->prototype('scalar')->end()
                                                ->end()
                                                ->arrayNode('views')
                                                    ->prototype('array')
                                                        ->children()
                                                            ->scalarNode('column')->end()
                                                            ->scalarNode('viewParent')->end()
                                                            ->scalarNode('templateUrlPath')->end()
                                                            ->scalarNode('templateUrl')->end()
                                                            ->scalarNode('template')->end()
                                                            ->arrayNode('urlParams')
                                                                ->prototype('scalar')->end()
                                                            ->end()
                                                        ->end()
                                                    ->end()
                                                ->end()
                                                ->arrayNode('childs')
                                                    ->prototype('array')
                                                        ->children()
                                                            ->scalarNode('url')->end()
                                                            ->scalarNode('templateUrl')->end()
                                                            ->scalarNode('templateUrlPath')->end()
                                                            ->scalarNode('template')->end()
                                                            ->arrayNode('urlParams')
                                                                ->prototype('scalar')->end()
                                                            ->end()
                                                            ->arrayNode('views')
                                                                ->prototype('array')
                                                                    ->children()
                                                                        ->scalarNode('column')->end()
                                                                        ->scalarNode('viewParent')->end()
                                                                        ->scalarNode('templateUrlPath')->end()
                                                                        ->scalarNode('templateUrl')->end()
                                                                        ->scalarNode('template')->end()
                                                                        ->arrayNode('urlParams')
                                                                            ->prototype('scalar')->end()
                                                                        ->end()
                                                                    ->end()
                                                                ->end()
                                                            ->end()
                                                        ->end()
                                                    ->end()
                                                ->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end();

        return $treeBuilder;
    }
}
