<?php

namespace Container5EoBdI2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9tD4s52Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9tD4s52' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9tD4s52'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mealsRepository' => ['privates', 'App\\Repository\\MealsRepository', 'getMealsRepositoryService', true],
        ], [
            'mealsRepository' => 'App\\Repository\\MealsRepository',
        ]);
    }
}
