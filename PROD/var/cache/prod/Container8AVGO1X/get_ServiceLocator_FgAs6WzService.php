<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FgAs6WzService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.FgAs6Wz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FgAs6Wz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'advVoyage' => ['privates', '.errored..service_locator.FgAs6Wz.App\\Entity\\AdvVoyage', NULL, 'Cannot autowire service ".service_locator.FgAs6Wz": it needs an instance of "App\\Entity\\AdvVoyage" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'advVoyage' => 'App\\Entity\\AdvVoyage',
            'entityManager' => '?',
        ]);
    }
}
