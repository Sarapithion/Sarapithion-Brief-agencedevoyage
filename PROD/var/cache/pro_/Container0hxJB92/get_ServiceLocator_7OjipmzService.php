<?php

namespace Container0hxJB92;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7OjipmzService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.7Ojipmz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Ojipmz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'advUser' => ['privates', '.errored..service_locator.7Ojipmz.App\\Entity\\AdvUser', NULL, 'Cannot autowire service ".service_locator.7Ojipmz": it needs an instance of "App\\Entity\\AdvUser" but this type has been excluded in "config/services.yaml".'],
        ], [
            'advUser' => 'App\\Entity\\AdvUser',
        ]);
    }
}
