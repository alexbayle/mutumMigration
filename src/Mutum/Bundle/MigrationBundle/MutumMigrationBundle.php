<?php

namespace Mutum\Bundle\MigrationBundle;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Mutum\Bundle\MigrationBundle\DependencyInjection\Compiler;


class MutumMigrationBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new Compiler\RegisterDoctrineRepositoriesPass($this), PassConfig::TYPE_OPTIMIZE);
    }
}
