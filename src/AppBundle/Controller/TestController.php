<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 14/01/15
 * Time: 10:35
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * @Route("/test")
 */
class TestController extends Controller{

    /**
     * @Route("/hello/{item}")
     */
    public function helloAction($item)
    {
        return $this->render('default/index.html.twig');
    }

} 