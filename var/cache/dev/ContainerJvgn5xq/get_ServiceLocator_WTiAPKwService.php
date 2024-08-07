<?php

namespace ContainerJvgn5xq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WTiAPKwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WTiAPKw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WTiAPKw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'meal' => ['privates', '.errored..service_locator.WTiAPKw.App\\Entity\\Meals', NULL, 'Cannot autowire service ".service_locator.WTiAPKw": it needs an instance of "App\\Entity\\Meals" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'meal' => 'App\\Entity\\Meals',
        ]);
    }
}
