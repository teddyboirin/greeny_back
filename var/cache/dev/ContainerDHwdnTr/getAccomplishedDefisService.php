<?php

namespace ContainerDHwdnTr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccomplishedDefisService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccomplishedDefis' shared autowired service.
     *
     * @return \App\Controller\AccomplishedDefis
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/AccomplishedDefis.php';

        return $container->services['App\\Controller\\AccomplishedDefis'] = new \App\Controller\AccomplishedDefis(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
