<?php

namespace ContainerPg8arOT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostDeckJsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PostDeckJson' shared autowired service.
     *
     * @return \App\Controller\PostDeckJson
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PostDeckJson.php';

        $container->services['App\\Controller\\PostDeckJson'] = $instance = new \App\Controller\PostDeckJson();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PostDeckJson', $container));

        return $instance;
    }
}
