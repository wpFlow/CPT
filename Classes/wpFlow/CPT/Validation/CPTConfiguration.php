<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 27.07.15
 * Time: 10:57
 */

namespace wpFlow\CPT\Validation;



use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class CPTConfiguration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('Register');

        $rootNode
            ->children()
                ->arrayNode('PostTypes')
                    ->prototype('array')
                    ->children()
                        ->arrayNode('labels')
                            ->children()
                                ->scalarNode('name')->end()
                                ->scalarNode('singular_name')->end()
                                ->scalarNode('menu_name')->end()
                                ->scalarNode('name_admin_bar')->end()
                                ->scalarNode('add_new')->end()
                                ->scalarNode('add_New_item')->end()
                                ->scalarNode('new_item')->end()
                                ->scalarNode('view_item')->end()
                                ->scalarNode('all_items')->end()
                                ->scalarNode('search_items')->end()
                                ->scalarNode('parent_item_colon')->end()
                                ->scalarNode('not_found')->end()
                                ->scalarNode('not_found_in_trash')->end()
                            ->end()
                        ->end()
                        ->scalarNode('description')->end()
                        ->booleanNode('public')->end()
                        ->booleanNode('exclude_from_search')->end()
                        ->booleanNode('public_queryable')->end()
                        ->booleanNode('show_ui')->end()
                        ->booleanNode('show_in_nav_menus')->end()
                        ->scalarNode('show_in_menu')->end()
                        ->booleanNode('show_in_admin_bar')->end()
                        ->booleanNode('query_var')->end()
                        ->integerNode('menu_position')->end()
                        ->scalarNode('menu_icon')->end()
                        ->arrayNode('capability_type')
                            ->prototype('scalar')->end()
                        ->end()
                        ->booleanNode('map_meta_cap')->end()
                        ->booleanNode('hierarchical')->end()
                        ->arrayNode('supports')
                            ->prototype('scalar')->end()
                        ->end()
                        ->scalarNode('has_archive')->end()
                        ->scalarNode('permalink_epmask')->end()
                        ->arrayNode('rewrite')

                        ->end()
                        ->scalarNode('query_var')->end()
                        ->booleanNode('can_export')->end()
                    ->end()
                ->end()
            ->end()
        ;
        return $treeBuilder;
    }
}