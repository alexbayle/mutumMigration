<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozResearch;
use Mutum\Bundle\V2Bundle\Entity\Research;
use Symfony\Component\Console\Output\OutputInterface;

class ResearchManager extends BaseManager
{
    private $categoryManager;
    private $userManager;

    public function __construct(CategoryManager $categoryManager, UserManager $userManager)
    {
        $this->categoryManager = $categoryManager;
        $this->userManager = $userManager;
    }

    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $offset => $object) {
            /** @var PozResearch $object */
            $search = new Research();
            $search->setReseIp($object->getResearchId());
            $search->setCategory($this->categoryManager->findByV1Id($object->getResearchCat()));
            $search->setReseDateCreation($object->getResearchCreated());
            $search->setReseLocation($object->getResearchLocation());
            $search->setReseResults($object->getResearchResults());
            $search->setReseText($object->getResearchText());
            $search->setUser($this->userManager->findByV1Id(11));
            $search->setV1($object->getId());

            $this->getEntityManager()->persist($search);
//            $this->getEntityManager()->flush();
//            $this->getEntityManager()->clear();

            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }
}