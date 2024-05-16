<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigBuilder_WarmerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'config_builder.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['config_builder.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
