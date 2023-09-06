<?php

namespace deuxhuithuit\routesapi;

use Craft;

class Plugin extends \craft\base\Plugin
{
    public function __construct($id, $parent = null, array $config = [])
    {
        \Craft::setAlias('@plugin/routesapi', $this->getBasePath());
        $this->controllerNamespace = 'deuxhuithuit\routesapi\controllers';

        // Set this as the global instance of this module class
        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }
}
