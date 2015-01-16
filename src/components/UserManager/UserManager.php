<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 16/01/15
 * Time: 15:14
 */

namespace components\UserManager;


use components\AbstractComponent;
use components\UserManager\versions\v1\UserManager as v1UserManager;

class UserManager extends AbstractComponent{
    /**
     * Loads a component based on current version
     * @return mixed
     */
    protected function loadComponent()
    {
        switch($this->currentVersion)
        {
            case "1.0":
                self::$instance = new v1UserManager();
                break;
            default:
                self::$instance = $this;
                break;
        }
    }

    /**
     * @return $this|mixed|null
     */
    public function getInstance()
    {
        $this->loadComponent();
        return self::$instance;
    }


} 