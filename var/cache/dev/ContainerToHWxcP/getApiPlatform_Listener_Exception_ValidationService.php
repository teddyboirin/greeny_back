<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/getApiPlatform_Listener_Exception_ValidationService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/getApiPlatform_Listener_Exception_ValidationService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_Exception_ValidationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/EventListener/ValidationExceptionListener.php';

        return $container->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener(($container->services['serializer'] ?? $container->getSerializerService()), $container->parameters['api_platform.error_formats']);
    }
}
