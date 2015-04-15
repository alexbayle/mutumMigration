<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozMangopay
 *
 * @ORM\Table(name="poz_mangopay")
 * @ORM\Entity
 */
class PozMangopay
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mangopay_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mangopayId;

    /**
     * @var string
     *
     * @ORM\Column(name="mangopay_name", type="string", length=255, nullable=false)
     */
    private $mangopayName;

    /**
     * @var string
     *
     * @ORM\Column(name="mangopay_pass", type="string", length=255, nullable=false)
     */
    private $mangopayPass;

    /**
     * @var string
     *
     * @ORM\Column(name="mangopay_legal_user", type="string", length=255, nullable=false)
     */
    private $mangopayLegalUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mangopay_wallet", type="string", length=255, nullable=false)
     */
    private $mangopayWallet;



    /**
     * Get mangopayId
     *
     * @return integer 
     */
    public function getMangopayId()
    {
        return $this->mangopayId;
    }

    /**
     * Set mangopayName
     *
     * @param string $mangopayName
     * @return PozMangopay
     */
    public function setMangopayName($mangopayName)
    {
        $this->mangopayName = $mangopayName;

        return $this;
    }

    /**
     * Get mangopayName
     *
     * @return string 
     */
    public function getMangopayName()
    {
        return $this->mangopayName;
    }

    /**
     * Set mangopayPass
     *
     * @param string $mangopayPass
     * @return PozMangopay
     */
    public function setMangopayPass($mangopayPass)
    {
        $this->mangopayPass = $mangopayPass;

        return $this;
    }

    /**
     * Get mangopayPass
     *
     * @return string 
     */
    public function getMangopayPass()
    {
        return $this->mangopayPass;
    }

    /**
     * Set mangopayLegalUser
     *
     * @param string $mangopayLegalUser
     * @return PozMangopay
     */
    public function setMangopayLegalUser($mangopayLegalUser)
    {
        $this->mangopayLegalUser = $mangopayLegalUser;

        return $this;
    }

    /**
     * Get mangopayLegalUser
     *
     * @return string 
     */
    public function getMangopayLegalUser()
    {
        return $this->mangopayLegalUser;
    }

    /**
     * Set mangopayWallet
     *
     * @param string $mangopayWallet
     * @return PozMangopay
     */
    public function setMangopayWallet($mangopayWallet)
    {
        $this->mangopayWallet = $mangopayWallet;

        return $this;
    }

    /**
     * Get mangopayWallet
     *
     * @return string 
     */
    public function getMangopayWallet()
    {
        return $this->mangopayWallet;
    }
}
