<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozRequest;
use Mutum\Bundle\V1Bundle\Entity\PozUser;
use Mutum\Bundle\V2Bundle\Entity\Discussion;
use Mutum\Bundle\V2Bundle\Entity\Message;
use Mutum\Bundle\V2Bundle\Entity\Request;
use Mutum\Bundle\V2Bundle\Entity\Speakers;
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
    /** @var UserManager */
    private $userManager;
    /** @var ProductManager $productManager */
    private $productManager;
    /** @var NotationManager $notationManager */
    private $notationManager;

    /**
     * @param RequestStatusManager $requestStatusManager
     * @param UserManager $userManager
     * @param ProductManager $productManager
     * @param NotationManager $notationManager
     */
    public function __construct(
        RequestStatusManager $requestStatusManager,
        UserManager $userManager,
        ProductManager $productManager,
        NotationManager $notationManager
    ) {
        $this->requestStatusManager = $requestStatusManager;
        $this->userManager = $userManager;
        $this->productManager = $productManager;
        $this->notationManager = $notationManager;
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


                $discussion = new Discussion();
                $discussion->setDiscDateCreation($object->getReqDatetime());
                $discussion->setDiscName(substr($object->getReqMessage(), 0, 50));
                $discussion->setDiscAllGrantInvit(false);

                $message = new Message();
                $message->setMessDateCreation($object->getReqDatetime());
                $message->setMessText($object->getReqMessage());
                $message->setUser($request->getBorrower());
                $message->setDiscussion($discussion);


                $speaker = new Speakers();
                $speaker->setSpeaAdmin(false);
                $speaker->setSpeaArchived(false);
                $speaker->setDiscussion($discussion);
                $speaker->setUser($request->getBorrower());
                $speaker->setSpeaSeen(\DateTime::createFromFormat('Y-m-d H:i:s', '0000-00-00 00:00:00'));
                $this->getEntityManager()->persist($speaker);

                $speaker = new Speakers();
                $speaker->setSpeaAdmin(false);
                $speaker->setSpeaArchived(false);
                $speaker->setDiscussion($discussion);
                $speaker->setUser($request->getLender());
                $speaker->setSpeaSeen(\DateTime::createFromFormat('Y-m-d H:i:s', '0000-00-00 00:00:00'));
                $this->getEntityManager()->persist($speaker);


                $request->setRequDiscussion($discussion);

                $this->getEntityManager()->persist($request);
            }

            $this->progressUpdate();
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }


}