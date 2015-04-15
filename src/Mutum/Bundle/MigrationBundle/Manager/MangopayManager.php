<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozMangopay;
use Mutum\Bundle\V2Bundle\Entity\Mangopay;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MangopayManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class MangopayManager extends BaseManager
{
    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozMangopay $object */
            $exists = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:Mangopay')
                ->find($object->getMangopayId());

            if (!$exists) {
                $mangopay = new Mangopay();
                $mangopay->setMangId($object->getMangopayId());
                $mangopay->setMangName($object->getMangopayName());
                $mangopay->setMangPass($object->getMangopayPass());
                $mangopay->setMangLegalUser($object->getMangopayLegalUser());
                $mangopay->setMangWallet($object->getMangopayWallet());

                $this->getEntityManager()->persist($mangopay);
            }

            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->progressStop();
    }


}