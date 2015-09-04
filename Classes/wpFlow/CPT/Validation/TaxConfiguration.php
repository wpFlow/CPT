<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 13.08.15
 * Time: 10:08
 */

namespace wpFlow\CPT\Validation;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class TaxConfiguration implements  ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder(){
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('Register');

        $rootNode
            ->children()
                ->arrayNode('Taxonomies')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('object_type')->end()
                            ->arrayNode('args')
                                ->children()
                                    ->scalarNode('label')->end()
                                    ->arrayNode('labels')
                                        ->children()
                                            ->scalarNode('name')->end()
                                            ->scalarNode('singular_name')->end()
                                            ->scalarNode('menu_name')->end()
                                            ->scalarNode('all_items')->end()
                                            ->scalarNode('edit_item')->end()
                                            ->scalarNode('view_item')->end()
                                            ->scalarNode('update_item')->end()
                                            ->scalarNode('add_new_item')->end()
                                            ->scalarNode('new_item_name')->end()
                                            ->scalarNode('parent_item')->end()
                                            ->scalarNode('parent_item_colon')->end()
                                            ->scalarNode('search_items')->end()
                                            ->scalarNode('popular_items')->end()
                                            ->scalarNode('separate_items_with_comma')->end()
                                            ->scalarNode('add_or_remove_items')->end()
                                            ->scalarNode('choose_from_most_used')->end()
                                            ->scalarNode('not_found')->end()
                                        ->end()
                                    ->end()
                                    ->booleanNode('public')->end()
                                    ->booleanNode('show_ui')->end()
                                    ->booleanNode('show_in_nav_menus')->end()
                                    ->booleanNode('show_tagcloud')->end()
                                    ->booleanNode('show_in_quick_edit')->end()
                                    ->booleanNode('show_admin_column')->end()
                                    ->scalarNode('description')->end()
                                    ->booleanNode('hierarchical')->end()
                                    ->arrayNode('update_count_callback')
                                        ->prototype('scalar')->end()
                                    ->end()
                                    ->scalarNode('query_var')->end()
                                    ->arrayNode('capabilities')
                                        ->prototype('scalar')->end()
                                    ->end()
                                    ->booleanNode('sort')->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }

}