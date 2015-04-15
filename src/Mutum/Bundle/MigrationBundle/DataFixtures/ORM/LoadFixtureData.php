<?php

namespace Mutum\Bundle\MigrationBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

use Symfony\Component\Finder\Finder;

/**
 * LoadFixtureData.
 */
class LoadFixtureData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {

        $finder = new Finder();
        $finder
            ->files()
            ->in(array(dirname(__DIR__)))
            ->name('*.yml')
            ->sortByName()
        ;

        foreach ($finder as $file) {
            echo '>> ' . $file  . PHP_EOL;
            Fixtures::load($file->getRealpath(), $manager, array('providers' => array($this), 'locale' => 'fr'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
