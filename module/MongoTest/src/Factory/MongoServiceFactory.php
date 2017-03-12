<?php
namespace MongoTest\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Doctrine\ODM\MongoDB\DocumentManager;
use MongoTest\Service\MongoService;


class MongoServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ListController
     */

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        $dm = $container->get(DocumentManager::class);
      

        return new MongoService($dm);
    }
}