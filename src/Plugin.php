<?php

namespace deuxhuithuit\craftgraphqlroutes;

use Craft;

class Plugin extends \craft\base\Plugin
{
    public function __construct($id, $parent = null, array $config = [])
    {
        \Craft::setAlias('@plugin/craftgraphqlroutes', $this->getBasePath());
        $this->controllerNamespace = 'deuxhuithuit\craftgraphqlroutes\controllers';

        // Set this as the global instance of this module class
        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }
}
