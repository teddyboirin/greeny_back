<?php

<<<<<<< HEAD:var/cache/dev/ContainerDHwdnTr/getSecurity_Command_UserPasswordEncoderService.php
namespace ContainerDHwdnTr;
=======
namespace ContainerToHWxcP;
>>>>>>> 224edc0a883c202bdaa54fa3d75deca233237923:var/cache/dev/ContainerToHWxcP/getSecurity_Command_UserPasswordEncoderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordEncoderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

        $container->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')), [0 => 'App\\Entity\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }
}
