<?php

<<<<<<< HEAD:var/cache/dev/ContainerJpxSNsZ/getFragment_Renderer_InlineService.php
namespace ContainerJpxSNsZ;
=======
namespace ContainerZxSUX7U;
>>>>>>> 760c35a48d05eb44fce49ee1c396f1bb53e1480e:var/cache/dev/ContainerZxSUX7U/getFragment_Renderer_InlineService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_InlineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $container->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}
