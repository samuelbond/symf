<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 16/01/15
 * Time: 14:22
 */

namespace UserBundle;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle{

    public function __construct()
    {
        $container = new ContainerBuilder();
        //$container->register("")
    }
} 