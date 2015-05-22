<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V2Bundle\Entity\ArticleState;
use Mutum\Bundle\V2Bundle\Entity\Limitation;
use Mutum\Bundle\V2Bundle\Entity\LimitationField;
use Mutum\Bundle\V2Bundle\Entity\Post;
use Mutum\Bundle\V2Bundle\Entity\Request;

class PostManager extends BaseManager
{
    /** @var PostCatManager $postCatManager */
    private $postCatManager;

    public function __construct(PostCatManager $postCatManager)
    {
        $this->postCatManager = $postCatManager;
    }

    public function createByRequest(Request $request)
    {
        $post = new Post();
        $post->setCategory($this->postCatManager->findOneBy(array('poscName' => 'new_loan')));
        $post->setPostDateCreation(new \DateTime());
        $post->setPostDeleted(false);
        $post->setPostText($request->getProduct()->getProdName());
        $post->setUser($request->getLender());


        $communities = $request->getProduct()->getCommunities();
        foreach ($communities as $community) {
            $limitationField = new LimitationField();
            $limitationField->setLimfTableId($community->getCommId());
            $limitationField->setLimfType(2);

            $limitation = new Limitation();
            $limitation->setField($limitationField);
            $limitation->setPost($post);
        }

        $this->getEntityManager()->persist($post);
        $this->getEntityManager()->flush();
    }
}