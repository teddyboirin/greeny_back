<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/getAnnotations_CacheWarmerService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/getAnnotations_CacheWarmerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $container->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($container->privates['annotations.reader'] ?? $container->getAnnotations_ReaderService()), ($container->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }
}
