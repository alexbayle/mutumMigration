<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozSponsor;
use Mutum\Bundle\V2Bundle\Entity\Sponsor;
use Symfony\Component\Console\Output\OutputInterface;

class SponsorManager extends BaseManager
{
    /** @var UserManager $userManager */
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozSponsor $object */
            $sponsor = $this->getEntityManager()->getRepository('MutumV2Bundle:Sponsor')
                ->findoneBy(array(
                        'sponEmail' => $object->getSponsorEmail(),
                        'user' => $object->getSponsorUserId(),
                    ));

            if (!$sponsor)
            {
                $sponsor = new Sponsor();
                $sponsor->setSponDateCreation($object->getSponsorAdded());
                $sponsor->setSponEmail($object->getSponsorEmail());
                $sponsor->setSponUnsubscribeCode($object->getSponsorUnsubscribeCode());
                $sponsor->setUser($this->userManager->findByV1Id($object->getSponsorUserId()));

                $this->getEntityManager()->persist($sponsor);

            }
            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }
}