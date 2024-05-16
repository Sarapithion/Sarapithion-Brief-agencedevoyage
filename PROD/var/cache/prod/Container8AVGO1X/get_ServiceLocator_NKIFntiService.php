<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NKIFntiService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.nKIFnti' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nKIFnti'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'advUserRepository' => ['privates', 'App\\Repository\\AdvUserRepository', 'getAdvUserRepositoryService', true],
        ], [
            'advUserRepository' => 'App\\Repository\\AdvUserRepository',
        ]);
    }
}
