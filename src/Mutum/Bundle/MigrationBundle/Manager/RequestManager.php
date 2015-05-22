<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozRequest;
use Mutum\Bundle\V1Bundle\Entity\PozUser;
use Mutum\Bundle\V2Bundle\Entity\Request;
use Mutum\Bundle\V2Bundle\Entity\User;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RequestManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class RequestManager extends BaseManager
{
    /** @var RequestStatusManager $requestStatusManager */
    private $requestStatusManager;
    /** @var UserManager $userManager */
    private $userManager;
    /** @var ProductManager $productManager */
    private $productManager;
    /** @var NotationManager $notationManager */
    private $notationManager;
    /** @var DiscussionManager $discussionManager */
    private $discussionManager;
    /** @var PostManager $postManager */
    private $postManager;


    /**
     * @param RequestStatusManager $requestStatusManager
     * @param UserManager $userManager
     * @param ProductManager $productManager
     * @param NotationManager $notationManager
     * @param DiscussionManager $discussionManager
     * @param PostManager $postManager
     */
    public function __construct(
        RequestStatusManager $requestStatusManager,
        UserManager $userManager,
        ProductManager $productManager,
        NotationManager $notationManager,
        DiscussionManager $discussionManager,
        PostManager $postManager
    ) {
        $this->requestStatusManager = $requestStatusManager;
        $this->userManager = $userManager;
        $this->productManager = $productManager;
        $this->notationManager = $notationManager;
        $this->discussionManager= $discussionManager;
        $this->postManager = $postManager;
    }

    /**
     * @param UserManager $userManager
     * @param PozUser $userV1
     * @param User $userV2
     * @return array
     */
    public function findByBorrower(UserManager $userManager, PozUser $userV1, User $userV2)
    {
        $requests = [];
        $objects = $this->getRepository()->findBy(array('reqUserId' => $userV1->getUserId()));
        foreach ($objects as $object) {
            /** @var PozRequest $object */

            $request = new Request();
            $request->setV1($object->getReqId());
            $request->setBorrower($userV2);
//            var_dump($userManager->findOrCreateWithDependancies($userV1)); die;
            $request->setLender($userManager->findOrCreate($userV1));
            $request->setProduct($this->productManager->findOneByV1($object->getReqArtId()));
//            $request->setRequDateCreation($object->getDate)
            $request->setRequDateFrom($object->getReqDateFrom());
            $request->setRequDateTo($object->getReqDateTo());
//            $request->setRequCredit($object->get)
//            $request->setRequDiscussion()
            $request->setRequCode($object->getReqCode());
            $request->setRequStatus($this->requestStatusManager->find($object->getReqStatus()));
            $request->setRequLenderNotaId($this->notationManager->find($object->getReqPreteurNote()));
            $request->setRequBorrowerNotaId($this->notationManager->find($object->getReqEmprunteurNote()));
//            $request->setRequProdNote($this->)


            $this->getEntityManager()->persist($request);

        }

        return $requests;
    }

    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozRequest $object */
            $request = $this->getEntityManager()->getRepository('MutumV2Bundle:Request')
                ->findOneBy(array('v1' => $object->getReqId()));
            if (!$request) {
                $request = new Request();
                $request->setV1($object->getReqId());
                $request->setBorrower($this->userManager->findOrCreateWithDependancies($object->getReqUserId()));
//            var_dump($userManager->findOrCreateWithDependancies($userV1)); die;
                $request->setLender($this->userManager->findOrCreateWithDependancies($object->getReqArtUserId()));
                $request->setProduct($this->productManager->findOneByV1($object->getReqArtId()));
                $request->setRequDateCreation($object->getReqDatetime());
                $request->setRequDateFrom($object->getReqDateFrom());
                $request->setRequDateTo($object->getReqDateTo());
                $request->setRequCredit(0); // A SETTER
                $request->setRequCode($object->getReqCode());
                $request->setRequStatus($this->requestStatusManager->findOneByV1($object->getReqStatus()));
                $request->setRequProdNote($object->getReqArtNote());
                $request->setRequLenderArchive($object->getReqPreteurArchive());
                $request->setRequBorrowerArchive($object->getReqEmprunteurArchive());
                $request->setRequLenderRead(false);
                $request->setRequBorrowerRead(false);
//                $request->setRequLenderNotaId($this->notationManager->findOrCreateByRequestId($object->));
//                $request->setRequBorrowerNotaId($this->notationManager->findOrCreateByRequestId($object-));
//            $request->setRequProdNote($this->)
//                var_dump('foobar');

//                print_r($request); die;


                $this->getEntityManager()->persist($request);
                $this->getEntityManager()->flush();

                $this->discussionManager->createByRequest($request, $object);
                $this->postManager->createByRequest($request);

            }

            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }


}