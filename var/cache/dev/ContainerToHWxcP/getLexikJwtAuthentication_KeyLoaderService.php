<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/getLexikJwtAuthentication_KeyLoaderService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/getLexikJwtAuthentication_KeyLoaderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_KeyLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_jwt_authentication.key_loader' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $container->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader((\dirname(__DIR__, 4).'/config/jwt/private.pem'), (\dirname(__DIR__, 4).'/config/jwt/public.pem'), 'a695ac64652385d222ecaacbf8158754');
    }
}
