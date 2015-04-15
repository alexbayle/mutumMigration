<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozRequestStatus;
use Mutum\Bundle\V2Bundle\Entity\RequestStatus;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RequestStatusManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class RequestStatusManager extends BaseManager
{
    /**
     * @param OutputInterface $output
     */
    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));
        foreach ($objects as $object) {
            /** @var PozRequestStatus $object */
            $status = $this->getEntityManager()
                ->getRepository('MutumV2Bundle:RequestStatus')
                ->find($object->getRequestStatusId());

            if (!$status) {
                $status = new RequestStatus();
                $status->setV1($object->getRequeststatusId());
                $status->setReqsName($object->getRequeststatusName());
                $status->setReqsBorrowerInfo($object->getRequeststatusEmprunteur());
                $status->setReqsLenderInfo($object->getRequeststatusPreteur());

                $this->getEntityManager()->persist($status);
                $this->progressUpdate();
            }
        }

        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }

    /**
     * @param $id
     * @return null|object
     */
    public function find($id)
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:RequestStatus')
            ->find($id);
    }

    /**
     * @param $id
     * @return null|object
     */
    public function findOneByV1($id)
    {
        return $this->getEntityManager()->getRepository('MutumV2Bundle:RequestStatus')
            ->findOneBy(array('v1' => $id));
    }
}