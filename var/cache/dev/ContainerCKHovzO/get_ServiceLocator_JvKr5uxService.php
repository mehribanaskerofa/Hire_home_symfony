<?php

namespace ContainerCKHovzO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JvKr5uxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JvKr5ux' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JvKr5ux'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'passwordEncoder' => '?',
        ]);
    }
}
