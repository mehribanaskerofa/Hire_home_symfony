<?php

namespace ContainerNUbYRYx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D6kYe1TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D6kYe1T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D6kYe1T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'homesRepository' => ['privates', 'App\\Repository\\Admin\\HomesRepository', 'getHomesRepositoryService', true],
        ], [
            'homesRepository' => 'App\\Repository\\Admin\\HomesRepository',
        ]);
    }
}
