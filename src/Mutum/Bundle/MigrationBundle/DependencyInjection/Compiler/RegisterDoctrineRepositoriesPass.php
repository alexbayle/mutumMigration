<?php

namespace Mutum\Bundle\MigrationBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Definition;

/**
 * Register automatically repositories such as services for all mapped entities
 *
 */
class RegisterDoctrineRepositoriesPass implements CompilerPassInterface
{
    /**
     * @var BundleInterface
     */
    protected $bundle;

    /**
     * @param BundleInterface $bundle
     */
    public function __construct(BundleInterface $bundle)
    {
        $this->bundle = $bundle;
    }

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        foreach (array('v1', 'v2') as $version) {
            $emService = "doctrine.orm.{$version}_entity_manager";
            if ($container->has($emService)) {
                $em = $container->get($emService);
                $classes = $em->getConfiguration()->getMetadataDriverImpl()->getAllClassNames();

                foreach ($classes as $class) {
                    if (strpos($class, 'Mutum') === 0) {
                        $classMetaData = $em->getClassMetadata($class);
                        $id = $this->generateForBundleClass(
                            $classMetaData->namespace,
                            $classMetaData->name,
                            'repository'
                        );

                        if ($container->hasDefinition($id)) {
                            continue;
                        }

                        $def = $this->createDefinition($class, $emService);

                        $container->setDefinition($id, $def);
                    }
                }
            }
        }
    }

    /**
     * @param String $className
     *
     * @return Definition
     */
    public function createDefinition($className, $factoryService)
    {
        $definition = new Definition();
        $definition->setClass('Doctrine\Common\Persistence\ObjectRepository');
        $definition->setFactoryService($factoryService);
        $definition->setFactoryMethod('getRepository');
        $definition->setArguments(array($className));

        return $definition;
    }

    /**
     * @param string  $namespace
     * @param string  $className
     * @param boolean $withSuffix
     *
     * @return string
     */
    public function generateForBundleClass($namespace, $className, $withSuffix = false)
    {
        $serviceId = substr($className, strlen($namespace) + 1);
        if (false !== $withSuffix) {
            $serviceId .= '.'.$withSuffix;
        }

        $serviceId = preg_replace_callback(
            '/([A-Z])./', function ($m) {
                return '_'.$m[0];
            },
            lcfirst($serviceId)
        );

        return strtolower($serviceId);
    }
}
