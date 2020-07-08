<?php

<<<<<<< HEAD:var/cache/dev/ContainerJpxSNsZ/getSecurity_Csrf_TokenManagerService.php
namespace ContainerJpxSNsZ;
=======
namespace ContainerZxSUX7U;
>>>>>>> 760c35a48d05eb44fce49ee1c396f1bb53e1480e:var/cache/dev/ContainerZxSUX7U/getSecurity_Csrf_TokenManagerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Csrf_TokenManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';

        return $container->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($container->privates['security.csrf.token_storage'] ?? $container->load('getSecurity_Csrf_TokenStorageService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}