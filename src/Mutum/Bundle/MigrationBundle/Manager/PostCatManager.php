<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V2Bundle\Entity\ArticleState;
use Mutum\Bundle\V2Bundle\Entity\PostCat;

/**
 * Class PostCatManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class PostCatManager extends BaseManager
{

    /**
     * @param array $criteria
     * @return PostCat
     */
    public function findOneBy(array $criteria)
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:PostCat')->findOneBy($criteria);
    }
}