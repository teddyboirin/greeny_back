<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/get_ServiceLocator_Beq5mCoService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/get_ServiceLocator_Beq5mCoService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Beq5mCoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.beq5mCo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.beq5mCo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'response' => ['privates', '.errored..service_locator.beq5mCo.Symfony\\Component\\HttpFoundation\\Response', NULL, 'Cannot autowire service ".service_locator.beq5mCo": it references class "Symfony\\Component\\HttpFoundation\\Response" but no such service exists.'],
        ], [
            'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ]);
    }
}
