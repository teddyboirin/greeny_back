<?php

<<<<<<< HEAD:var/cache/dev/ContainerJpxSNsZ/getSecurity_AccessMapService.php
namespace ContainerJpxSNsZ;
=======
namespace ContainerZxSUX7U;
>>>>>>> 760c35a48d05eb44fce49ee1c396f1bb53e1480e:var/cache/dev/ContainerZxSUX7U/getSecurity_AccessMapService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/clinical_cases'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/patients'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/commentaires'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/notations'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/users', NULL, [0 => 'GET', 1 => 'PUT', 2 => 'DELETE']), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);

        return $instance;
    }
}
