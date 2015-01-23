<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 19/01/15
 * Time: 14:49
 */

namespace components\UserManager;



use UserBundle\Entity\UserRoles;
use UserBundle\Entity\Users;

class DoctrineUserManagerDAO extends UserManagerDAO{

    /**
     * Get a given student by the user id
     * @throws |Exception
     * @param $userId
     * @return array
     */
    public function getUserWithUserId($userId)
    {
        try
        {
            //$conn = self::$conn->getRepository("UserBundle\Entity\Users");
            /**
             * @var $user \UserBundle\Entity\Users
             */
            $user =  self::$conn->find("UserBundle\Entity\Users", $userId);

            return array(
                "id" => $user->getId(),
                "name" => $user->getFullname(),
                "email" => $user->getEmail(),
                "password" => $user->getPassword(),
                "user_role" => $user->getUserRole()->getRoleName(),
                "user_role_id" => $user->getUserRole()->getId(),
                "profile_picture" => $user->getProfilePics(),
            );
        }catch (\Exception $ex)
        {
            return array();
        }
    }

    /**
     * Creates a new user
     * @throws |Exception
     * @param array $user
     * @return bool
     */
    public function insertNewUser(array $user)
    {
        try
        {
            $newUser = new Users();
            $newUser->setEmail($user['email']);
            $newUser->setFullname($user['name']);
            $newUser->setPassword($user['password']);
            $newUser->setProfilePics($user['profile_picture']);
            $newUser->setUserRole($this->fetchRoleById($user['role_id']));
            return true;
        }catch (\Exception $ex)
        {
            return false;
        }
    }

    /**
     * Updates a given user
     * @throws |Exception
     * @param array $user
     * @return bool
     */
    public function updateUser(array $user)
    {
        throw new \Exception(__FUNCTION__." Not implemented");
    }

    /**
     * @param $roleId
     * @return null|\UserBundle\Entity\UserRoles
     */
    public function fetchRoleById($roleId)
    {
        try
        {
            return self::$conn->find("UserBundle\Entity\UserRoles", $roleId);
        }catch (\Exception $ex)
        {
            return null;
        }
    }


} 