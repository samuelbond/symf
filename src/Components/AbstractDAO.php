<?php
/**
 * @author Samuel I Amaziro
 */
namespace components;
use Doctrine\ORM\EntityManager;

/**
 * Class AbstractDAO
 * @package components
 */
Abstract class AbstractDAO {
    /**
     * Contains access to data store depending on type of DAO
     * @var mixed|EntityManager|\PDO|\Mysqli
     */
    protected static $conn;
    /**
     * Provides a way to find a specific item
     * @param array $item
     * @throws |Exception
     * @return mixed
     */
    abstract public function find(array $item);
    /**
     * Sets the connection to a data store
     * @param $conn
     */
    public function setConn($conn)
    {
        if(self::$conn !== $conn)
        {
            self::$conn = $conn;
        }
    }
}