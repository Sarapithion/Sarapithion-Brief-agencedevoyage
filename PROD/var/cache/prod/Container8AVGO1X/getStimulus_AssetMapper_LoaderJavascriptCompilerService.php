<?php

namespace Container8AVGO1X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStimulus_AssetMapper_LoaderJavascriptCompilerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'stimulus.asset_mapper.loader_javascript_compiler' shared service.
     *
     * @return \Symfony\UX\StimulusBundle\AssetMapper\StimulusLoaderJavaScriptCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['stimulus.asset_mapper.controllers_map_generator'] ?? $container->load('getStimulus_AssetMapper_ControllersMapGeneratorService'));

        if (isset($container->privates['stimulus.asset_mapper.loader_javascript_compiler'])) {
            return $container->privates['stimulus.asset_mapper.loader_javascript_compiler'];
        }

        return $container->privates['stimulus.asset_mapper.loader_javascript_compiler'] = new \Symfony\UX\StimulusBundle\AssetMapper\StimulusLoaderJavaScriptCompiler($a, false);
    }
}
