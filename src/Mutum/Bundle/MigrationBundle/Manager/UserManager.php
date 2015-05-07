<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozUser;
use Mutum\Bundle\V2Bundle\Entity\Address;
use Mutum\Bundle\V2Bundle\Entity\User;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Exception\RuntimeException;

/**
 * Class UserManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
class UserManager extends BaseManager
{
    /** @var AddressManager */
    private $addressManager;
    /** @var RankManager $rankManager */
    private $rankManager;

    public function __construct(AddressManager $addressManager, RankManager $rankManager) {
        $this->addressManager = $addressManager;
        $this->rankManager = $rankManager;
    }

    /**
     * Process migration
     */
    public function execute(OutputInterface $output)
    {
        $datas = $this->getRepository()->findAll();
        $this->progressInit($output, count($datas));
        foreach ($datas as $offset => $data) {
            $this->findOrCreateWithDependancies($data);
            $this->getEntityManager()->flush();
            $this->getEntityManager()->clear();
            $this->progressUpdate();
        }
        $this->progressStop();
    }

    /**
     * @param $object
     * @return User
     */
    public function findOrCreateWithDependancies($object)
    {
        if (is_int($object)) {
            $object = $this->getRepository()->find($object);
            if (!$object) {
                throw new RuntimeException(sprintf("No Pozuser found for id='%s'", $object));
            }
        }
        if (!$object instanceof PozUser) {
            throw new RuntimeException("You should provide a valid PozUser");
        }

        return $this->transform($object);
    }


    /**
     * @param PozUser $object
     */
    protected function transform(PozUser $object)
    {
        $user = $this->findOrCreate($object);
        $user->setUserAddress($this->addressManager->findOrCreateByV1User($object));
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();

        return $user;
    }


    /**
     * @param PozUser $object
     * @return User
     */
    public function findOrCreate(PozUser $object)
    {
        $user = $this->getEntityManager()->getrepository('MutumV2Bundle:User')
            ->findOneBy(array('v1' => $object->getUserId()));

        if (!$user) {
            $user = new User();
            $user->setV1($object->getUserId());
            $user->setUserFirstname($object->getUserFirstname());
            $user->setUserLastname($object->getUserLastname());
            $user->setUserPassword($object->getUserPassword());
            $user->setUserEmail($object->getUserEmail());
            $user->setUserAdmin($object->getUserAdmin());
            $user->setUserBirthdate($object->getUserBirthdate());
            $user->setUserSex($object->getUserSex());
            $user->setUserPhone($object->getUserPhone());
            $user->setUserPhoneHide($object->getUserPhoneHide());
            $user->setUserSponsorCode($object->getUserSponsorCode());
            $user->setUserGodfather($object->getUserGodfather());
            $user->setUserMangopayId($object->getUserMangopayId());
            $user->setUserCredit($object->getUserCredit());
            $user->setUserNbNotation($object->getUserNbNotation());
            $user->setUserNotation($object->getUserNotation());
            $user->setUserDateCreation($object->getUserCreation());
            $user->setUserActive($object->getUserActif());
            $user->setUserScore($object->getUserScore());
            $user->setUserOnline($object->getUserLastconnexion());


            // $user->setUserTitle($object->getUser);
            // $user->setUserFacebookId($object->getUser);
            $user->setUserRank($this->rankManager->getRankByScore($object->getUserScore()));

            $this->getEntityManager()->persist($user);
        }

        return $user;
    }


    /**
     * @param $id
     * @return null|object
     */
    public function findByV1Id($id)
    {
        return $this->getEntityManager()->getrepository('MutumV2Bundle:User')
            ->findOneBy(array('v1' => $id));
    }
}