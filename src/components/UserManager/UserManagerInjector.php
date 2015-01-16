<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 16/01/15
 * Time: 15:55
 */

namespace components\UserManager;


use components\AbstractComponentInjector;
use Doctrine\ORM\EntityManager;

class UserManagerInjector extends AbstractComponentInjector{

    private static $configuration;
    /**
     * @var null|EntityManager;
     */
    private static $entityManager;

    /**
     * @param array $parameters
     * @throws \Exception
     */
    public function needed(array $parameters)
    {
        throw new \Exception("Invalid or incomplete parameters provided");
    }

    public function setDoctrineEntityManager(EntityManager $em)
    {
        if(!(self::$entityManager instanceof EntityManager) && !self::$entityManager->isOpen())
        {
            self::$entityManager = $em;
        }
    }

    public function getDoctrineEntityManager()
    {
        return self::$entityManager;
    }
} 