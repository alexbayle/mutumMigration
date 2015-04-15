<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozCategory;
use Mutum\Bundle\V2Bundle\Entity\CategoryArticle;
use Symfony\Component\Console\Output\OutputInterface;

class CategoryManager extends BaseManager
{
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));

        foreach ($objects as $object) {
            /** @var PozCategory $object */
            $category = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:CategoryArticle')
                ->find($object->getCatId());


            if (!$category) {
                $category = new CategoryArticle();
                $category->setV1($object->getCatId());
                $category->setCataName($object->getCatName());
                $category->setCataDesc('');
                $category->setCataOrder(1);
                $category->setCataPictogramme('');
                $category->setCataLength(0);

                $this->getEntityManager()->persist($category);
                $this->progressUpdate();
            }
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }

    public function find($id)
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:CategoryArticle')->find($id);
    }

    public function findATrier()
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:CategoryArticle')->findOneBy(array('cataName' => 'A TRIER'));
    }

    public function findByV1Id($id)
    {
        $id = $id ? : -1;
        return $this->getEntityManager()->getRepository('MutumV2Bundle:CategoryArticle')->findOneBy(array('v1' => $id));
    }



}