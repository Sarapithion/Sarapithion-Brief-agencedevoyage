<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdvVoyageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdvVoyageController' shared autowired service.
     *
     * @return \App\Controller\AdvVoyageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdvVoyageController'] = $instance = new \App\Controller\AdvVoyageController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AdvVoyageController', $container));

        return $instance;
    }
}
