<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/getDoctrine_MappingImportCommandService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/getDoctrine_MappingImportCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_MappingImportCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $container->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($container->services['doctrine'] ?? $container->getDoctrineService()), $container->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }
}