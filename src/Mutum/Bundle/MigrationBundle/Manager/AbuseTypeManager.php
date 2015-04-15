<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozAbuseType;
use Mutum\Bundle\V2Bundle\Entity\AbuseType;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AbuseTypeManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class AbuseTypeManager extends BaseManager
{

    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozAbuseType $object */

            $type = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:AbuseType')
                ->find($object->getAbusetypeId());

            if (!$type) {
                $type = new AbuseType();
                $type->setAbutId($object->getAbusetypeId());
                $type->setAbutText($object->getAbusetypeText());

                $this->getEntityManager()->persist($type);
            }
            $this->progressUpdate();
        }
        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }
}