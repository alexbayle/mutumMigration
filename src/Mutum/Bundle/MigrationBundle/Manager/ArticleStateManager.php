<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V2Bundle\Entity\ArticleState;

class ArticleStateManager extends BaseManager
{
    public function findOneByText($text)
    {
        $state = $this->getRepository()->findOneBy(array('artsText' => $text));

        if (!$state) {
            $state = new ArticleState;
            $state->setArtsText($text);
            $this->getEntityManager()->persist($state);
        }

        return $state;
    }
}