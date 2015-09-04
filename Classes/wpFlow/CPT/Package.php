<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 27.07.15
 * Time: 10:48
 */

namespace wpFlow\CPT;

use wpFlow\Core\Bootstrap;
use wpFlow\Core\Package\Package as BasePackage;
use wpFlow\CPT\Validation\CPTConfiguration;
use wpFlow\CPT\Validation\TaxConfiguration;

class Package extends BasePackage
{
    protected $bootstrap;
    protected $configManager;

    public function boot(Bootstrap $bootstrap){
        $this->bootstrap = $bootstrap;
        $configManager = $this->bootstrap->injectDependency('configManager');
        $configManager->addConfigValidation('CustomPostTypes.yaml', new CPTConfiguration());
        $configManager->addConfigValidation('Taxonomies.yaml', new TaxConfiguration());

    }

    public function run(){
        $args = $this->getConfigValues('CustomPostTypes.yaml');
        $tax = $this->getConfigValues('Taxonomies.yaml');

        new RegisterCustomPostType($args);
        new RegisterTaxonomie($tax);
    }
}