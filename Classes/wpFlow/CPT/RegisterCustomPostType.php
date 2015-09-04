<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 13.08.15
 * Time: 09:41
 */

namespace wpFlow\CPT;


use wpFlow\Core\Utilities\Debug;

class RegisterCustomPostType
{
    protected $arguments;

    public function __construct( array $arguments ){
        $this->arguments = $arguments;
        $this->register();
    }

    protected function register(){

        foreach($this->arguments['PostTypes'] as $postType => $args){

            if(empty($args['capability_type'])) unset($args['capability_type']);
            if(empty($args['supports'])) unset($args['supports']);

            register_post_type($postType, $args);
        }
    }

}