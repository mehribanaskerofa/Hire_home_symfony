<?php

namespace ContainerCKHovzO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ImageController' shared autowired service.
     *
     * @return \App\Controller\Admin\ImageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\Admin\\ImageController.php';

        $container->services['App\\Controller\\Admin\\ImageController'] = $instance = new \App\Controller\Admin\ImageController();

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Controller\\Admin\\ImageController', $container));

        return $instance;
    }
}