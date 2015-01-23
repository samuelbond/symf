<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 16/01/15
 * Time: 14:15
 */

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller {

    /**
     * @Route("/homes", name="profile")
     */
    public function indexAction()
    {

        return $this->render('default/index.html.twig');
    }
} 