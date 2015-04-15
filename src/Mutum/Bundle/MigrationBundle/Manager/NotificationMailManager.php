<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozNotificationMail;
use Mutum\Bundle\V2Bundle\Entity\NotificationMail;
use Symfony\Component\Console\Output\OutputInterface;

class NotificationMailManager extends BaseManager
{
    private $catManager;

    public function __construct(NotificationCatManager $catManager)
    {
        $this->catManager = $catManager;
    }

    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozNotificationMail $object */
            $mail = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:NotificationMail')
                ->find($object->getNotifmailId());

            if (!$mail) {
                $mail = new NotificationMail();
                $mail->setNotmId($object->getNotifmailId());
                $mail->setNotmName($object->getNotifmailName());
                $mail->setNotmShort('');
                $mail->setCategory($this->catManager->find($object->getNotifmailCat()));

                $this->getEntityManager()->persist($mail);
                $this->progressUpdate();
            }
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }


}