<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Api\ReservationController' shared autowired service.
     *
     * @return \App\Controller\Api\ReservationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Api\\ReservationController'] = $instance = new \App\Controller\Api\ReservationController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Api\\ReservationController', $container));

        return $instance;
    }
}
