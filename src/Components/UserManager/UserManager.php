<?php
/**
 * @author Samuel I Amaziro
 */
namespace components\UserManager;
use components\AbstractComponent;
use components\AbstractComponentInjector;

/**
* Class UserManager
 * @package components\UserManager
 */
class UserManager extends AbstractComponent
{
    /**
     * Loads a component based on current version
     */
    protected function loadComponent()
    {
        switch($this->currentVersion)
        {
            case "1.0":
                self::$instance = new \components\UserManager\versions\v1\UserManager();
                break;
            default:
                self::$instance = $this;
                break;
        }
    }
    /**
     * Returns an instance of the component
     * @param AbstractComponentInjector $componentInjector
     * @return null|\components\UserManager\versions\v1\UserManager
     */
    public function getInstance(AbstractComponentInjector $componentInjector = null)
    {
        if(!is_null($componentInjector))
        {
            $this->loadComponent();
            $componentInjector->inject(self::$instance);
        }
        return self::$instance;
    }

}
