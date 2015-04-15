<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozBuy;
use Mutum\Bundle\V2Bundle\Entity\Buy;
use Doctrine\Common\Inflector\Inflector;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class BuyManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class BuyManager extends BaseManager
{
    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));

        foreach ($objects as $object) {
            /** @var PozBuy $object */
            $buy = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:Buy')
                ->find($object->getBuyId());
            if (!$buy) {
                $buy = new Buy();
                $buy->setV1($object->getBuyId());
                $buy->setBuyName($object->getBuyName());
                $buy->setBuyPrice($object->getBuyPrice());
                $buy->setBuyGift($object->getBuyGift());
                $buy->setBuyColor($object->getBuyColor());
                $buy->setBuyColor2($object->getBuyColor2());
                $buy->setBuyActive($object->getBuyActive());

                $this->getEntityManager()->persist($buy);
                $this->progressUpdate();
            }
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }

    /**
     * @param $id
     * @return null|object
     */
    public function findByV1Id($id)
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:Buy')->findOneBy(
            array(
                'v1' => $id
            )
        );

    }
}