<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdvVoyageRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AdvVoyageRepository' shared autowired service.
     *
     * @return \App\Repository\AdvVoyageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AdvVoyageRepository'] = new \App\Repository\AdvVoyageRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}