<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozContact;
use Mutum\Bundle\V2Bundle\Entity\Contact;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ContactManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class ContactManager extends BaseManager
{
    /** @var UserManager $userManager */
    private $userManager;

    /**
     * @param UserManager $userManager
     */
    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozContact $object */
            $contact = $this->getEntityManager()->getRepository('MutumV2Bundle:Contact')
                ->findOneBy(array('v1' => $object->getContactId()));
            if (!$contact) {
                $contact = new Contact();
                $contact->setFrom($this->userManager->findByV1Id($object->getContactUserId()));
                $contact->setTo($this->userManager->findByV1Id($object->getContactDestUserId()));
                $contact->setContStatus($object->getContactStatus());
                $contact->setContDateCreation($object->getContactDateCreation());
                $contact->setContDateAccepted($object->getContactDateAccept());
                $contact->setV1($object->getContactId());

                $this->getEntityManager()->persist($contact);
            }
            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();

        $this->progressStop();
    }
}