<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozWords;
use Mutum\Bundle\V2Bundle\Entity\Words;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class WordManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class WordManager extends BaseManager
{
    /**
     *
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozWords $object */
            $word = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:Words')
                ->findOneBy(array('text' => $object->getWordsText()));

            if (!$word) {
                $word = new Words();
                $word->setText($object->getWordsText());

                $this->getEntityManager()->persist($word);
            }
            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->progressStop();
    }


}