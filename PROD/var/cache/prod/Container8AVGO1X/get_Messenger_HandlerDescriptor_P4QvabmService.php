<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_P4QvabmService extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.p4Qvabm' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService'));

        if (isset($container->privates['.messenger.handler_descriptor.p4Qvabm'])) {
            return $container->privates['.messenger.handler_descriptor.p4Qvabm'];
        }

        return $container->privates['.messenger.handler_descriptor.p4Qvabm'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Messenger\Handler\RedispatchMessageHandler($a), []);
    }
}
