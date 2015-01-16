<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 16/01/15
 * Time: 15:39
 */

namespace components;


Abstract Class AbstractComponentInjector {

    /**
     *
     * @param array $myNeededConfigurationParameters
     * @throws |Exception
     * @return void
     */
    abstract public function needed(array $myNeededConfigurationParameters);

    /**
     * Injects dependency to component
     * @param AbstractComponent $component
     * @return void
     */
    abstract public function inject(AbstractComponent $component);
} 