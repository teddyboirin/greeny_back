<?php

<<<<<<< HEAD:var/cache/dev/ContainerJpxSNsZ/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php
namespace ContainerJpxSNsZ;
=======
namespace ContainerZxSUX7U;
>>>>>>> 760c35a48d05eb44fce49ee1c396f1bb53e1480e:var/cache/dev/ContainerZxSUX7U/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.pagination' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/PaginationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/Pagination.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $container->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension(($container->services['doctrine'] ?? $container->getDoctrineService()), $a, new \ApiPlatform\Core\DataProvider\Pagination($a, $container->parameters['api_platform.collection.pagination'], $container->parameters['api_platform.graphql.collection.pagination']));
    }
}
