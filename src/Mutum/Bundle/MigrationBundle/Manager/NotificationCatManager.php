<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozNotificationCat;
use Mutum\Bundle\V2Bundle\Entity\NotificationCat;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class NotificationCatManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class NotificationCatManager extends BaseManager
{
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            $this->findOrCreateByPozNotificationCat($object);
            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }

    /**
     * @param $id
     * @return null|object
     */
    public function find($id, $nullable = false)
    {
        $category = $this->getEntityManager()->getRepository('MutumV2Bundle:NotificationCat')->find($id);
        if (!$nullable && !$category) {
            throw new \RuntimeException(sprintf("No notificationCat found for id='%s'", $id));
        }

        return $category;
    }

    /**
     * @param PozNotificationCat $object
     */
    private function findOrCreateByPozNotificationCat(PozNotificationCat $object)
    {
        $category = $this->find($object->getNotifcatId(), true);
        if (!$category) {
            $category = new NotificationCat();
            $category->setNotcId($object->getNotifcatId());
            $category->setNotcName($object->getNotifcatName());

            $this->getEntityManager()->persist($category);
        }
    }
}