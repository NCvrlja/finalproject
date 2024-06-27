<?php

namespace ContainerJvgn5xq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P4PC8BUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P4PC8BU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P4PC8BU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mealsRepo' => ['privates', 'App\\Repository\\MealsRepository', 'getMealsRepositoryService', true],
            'plannerRepository' => ['privates', 'App\\Repository\\PlannerRepository', 'getPlannerRepositoryService', true],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'mealsRepo' => 'App\\Repository\\MealsRepository',
            'plannerRepository' => 'App\\Repository\\PlannerRepository',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
