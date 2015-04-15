<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozSponsorUnsubscribe;
use Mutum\Bundle\V2Bundle\Entity\SponsorUnsubscribe;
use Symfony\Component\Console\Output\OutputInterface;

class SponsorUnsubManager extends BaseManager
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
            /** @var PozSponsorUnsubscribe $object */
            $sponsor = $this->getEntityManager()->getRepository('MutumV2Bundle:SponsorUnsubscribe')
                ->findoneBy(
                    array(
                        'spouEmail' => $object->getUnsubMail(),
                    )
                );

            if (!$sponsor) {
                $sponsor = new SponsorUnsubscribe();
                $sponsor->setSpouDateCreation($object->getUnsubCreated());
                $sponsor->setSpouEmail($object->getUnsubMail());
                $this->getEntityManager()->persist($sponsor);
            }

            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->progressStop();
    }
}