<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozTransaction;
use Mutum\Bundle\V2Bundle\Entity\Transaction;
use Symfony\Component\Console\Output\OutputInterface;

class TransactionManager extends BaseManager
{
    /** @var UserManager $userManager */
    private $userManager;
    /** @var  BuyManager $buyManager */
    private $buyManager;

    public function __construct(UserManager $userManager, BuyManager $buyManager)
    {
        $this->userManager = $userManager;
        $this->buyManager = $buyManager;
    }

    public function execute(OutputInterface $output)
    {
        $objects = $this->getRepository()->findAll();
        $this->progressInit($output, count($objects));

        foreach ($objects as $object) {
            /** @var PozTransaction $object */
//            $transaction = $this->getEntityManager()
//                ->getRepository('MutumV2Bundle:Transaction')
//                ->findOneBuy(array(''));
//
//            if (!$transaction) {
                $transaction = new Transaction();
                $transaction->setTranCardId($object->getTransactionCardId());
                $transaction->setTranDateCreation($object->getTransactionDatetime());
                $transaction->setTranPayinId($object->getTransactionPayinId());
                $transaction->setBuy($this->buyManager->findByV1Id($object->getTransactionBuyId()));
                $transaction->setUser($this->userManager->findByV1Id($object->getTransactionUserId()));

                $this->getEntityManager()->persist($transaction);
//            }

            $this->progressUpdate();
        }
        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
        $this->progressStop();
    }
}