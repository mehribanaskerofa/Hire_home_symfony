<?php

namespace ContainerNUbYRYx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HcXF1VdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hcXF1Vd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hcXF1Vd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.hcXF1Vd.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.hcXF1Vd": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
