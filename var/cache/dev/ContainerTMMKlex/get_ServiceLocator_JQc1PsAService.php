<?php

namespace ContainerTMMKlex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JQc1PsAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jQc1PsA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jQc1PsA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'recette' => ['privates', '.errored..service_locator.jQc1PsA.App\\Entity\\Recette', NULL, 'Cannot autowire service ".service_locator.jQc1PsA": it references class "App\\Entity\\Recette" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'recette' => 'App\\Entity\\Recette',
        ]);
    }
}
