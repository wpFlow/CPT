<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 13.08.15
 * Time: 13:45
 */

namespace wpFlow\CPT;


class RegisterTaxonomie
{
    protected $arguments;

    public function __construct( array $arguments ){
        $this->arguments = $arguments;
        $this->register();
    }

    protected function register(){

        foreach($this->arguments['Taxonomies'] as $taxName => $args){

            if(empty($args['update_count_callback'])) unset($args['update_count_callback']);
            if(empty($args['capabilities'])) unset($args['capabilities']);

            $objectType = $args['object_type'];

            register_taxonomy($taxName, $objectType, $args);
            register_taxonomy_for_object_type($taxName, $objectType);
        }
    }
}