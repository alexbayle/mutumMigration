<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Mutum\Bundle\V1Bundle\Entity\PozArticle;
use Mutum\Bundle\V1Bundle\Entity\PozUser;
use Mutum\Bundle\V2Bundle\Entity\Address;

class AddressManager extends BaseManager
{
    /**
     * @param PozArticle $article
     * @return Address
     */
    public function findOrCreateByV1Article(PozArticle $article)
    {
        $address = $this->findOneBy($article->getArtLatitude(), $article->getArtLongitude());

        if (!$address) {
            $address = new Address();
            $address->setAddrAddress($article->getArtAddress());
            $address->setAddrZip($article->getArtZip());
            $address->setAddrCity($article->getArtCity());
            $address->setAddrLatitude($article->getArtLatitude());
            $address->setAddrLongitude($article->getArtLongitude());

//            $this->getEntityManager()->persist($address);
        }

        return $address;
    }

    public function findOrCreateByV1User(PozUser $user)
    {
        $address = $this->findOneBy($user->getUserLatitude(), $user->getUserLongitude());

        if (!$address) {
            $address = new Address();
            $address->setAddrAddress($user->getUserAddress());
            $address->setAddrCity($user->getUserCity());
            $address->setAddrZip($user->getUserZip());
            $address->setAddrLatitude($user->getUserLatitude());
            $address->setAddrLongitude($user->getUserLongitude());
        }

        return $address;
    }

    public function findOneBy($lat, $lng)
    {
        return $this->getRepository()->findOneBy(
            array(
                'addrLatitude' => $lat,
                'addrLongitude' => $lng
            )
        );
    }
}