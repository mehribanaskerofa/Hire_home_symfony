<?php

namespace ContainerNUbYRYx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bv1nHN9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bv1nHN9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bv1nHN9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'response' => ['privates', '.errored..service_locator.Bv1nHN9.Symfony\\Component\\HttpFoundation\\Response', NULL, 'Cannot autowire service ".service_locator.Bv1nHN9": it references class "Symfony\\Component\\HttpFoundation\\Response" but no such service exists.'],
        ], [
            'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ]);
    }
}
