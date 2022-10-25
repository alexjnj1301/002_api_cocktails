<?php

namespace Container83dxxxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kbr8elPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kbr8elP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kbr8elP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', true],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'entityManager' => '?',
            'serializer' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
