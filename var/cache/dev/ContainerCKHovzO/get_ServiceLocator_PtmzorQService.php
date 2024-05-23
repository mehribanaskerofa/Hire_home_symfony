<?php

namespace ContainerCKHovzO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PtmzorQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ptmzorQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ptmzorQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'setting' => ['privates', '.errored..service_locator.ptmzorQ.App\\Entity\\Setting', NULL, 'Cannot autowire service ".service_locator.ptmzorQ": it references class "App\\Entity\\Setting" but no such service exists.'],
        ], [
            'setting' => 'App\\Entity\\Setting',
        ]);
    }
}
