<?php

namespace ContainerCKHovzO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Admin\HomesType' shared autowired service.
     *
     * @return \App\Form\Admin\HomesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\Admin\\HomesType.php';

        return $container->privates['App\\Form\\Admin\\HomesType'] = new \App\Form\Admin\HomesType();
    }
}
