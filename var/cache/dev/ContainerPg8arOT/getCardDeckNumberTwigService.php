<?php

namespace ContainerPg8arOT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardDeckNumberTwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\cardDeckNumberTwig' shared autowired service.
     *
     * @return \App\Controller\cardDeckNumberTwig
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/cardDeckNumberTwig.php';

        $container->services['App\\Controller\\cardDeckNumberTwig'] = $instance = new \App\Controller\cardDeckNumberTwig();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\cardDeckNumberTwig', $container));

        return $instance;
    }
}
