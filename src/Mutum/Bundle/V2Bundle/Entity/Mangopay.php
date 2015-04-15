<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mangopay
 *
 * @ORM\Table(name="mangopay")
 * @ORM\Entity
 */
class Mangopay
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mang_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mangId;

    /**
     * @var string
     *
     * @ORM\Column(name="mang_name", type="string", length=255, nullable=false)
     */
    private $mangName;

    /**
     * @var string
     *
     * @ORM\Column(name="mang_pass", type="string", length=255, nullable=false)
     */
    private $mangPass;

    /**
     * @var string
     *
     * @ORM\Column(name="mang_legal_user", type="string", length=255, nullable=false)
     */
    private $mangLegalUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mang_wallet", type="string", length=255, nullable=false)
     */
    private $mangWallet;


    public function setMangId($id)
    {
        $this->mangId = $id;
    }

    /**
     * Get mangId
     *
     * @return integer 
     */
    public function getMangId()
    {
        return $this->mangId;
    }

    /**
     * Set mangName
     *
     * @param string $mangName
     * @return Mangopay
     */
    public function setMangName($mangName)
    {
        $this->mangName = $mangName;

        return $this;
    }

    /**
     * Get mangName
     *
     * @return string 
     */
    public function getMangName()
    {
        return $this->mangName;
    }

    /**
     * Set mangPass
     *
     * @param string $mangPass
     * @return Mangopay
     */
    public function setMangPass($mangPass)
    {
        $this->mangPass = $mangPass;

        return $this;
    }

    /**
     * Get mangPass
     *
     * @return string 
     */
    public function getMangPass()
    {
        return $this->mangPass;
    }

    /**
     * Set mangLegalUser
     *
     * @param string $mangLegalUser
     * @return Mangopay
     */
    public function setMangLegalUser($mangLegalUser)
    {
        $this->mangLegalUser = $mangLegalUser;

        return $this;
    }

    /**
     * Get mangLegalUser
     *
     * @return string 
     */
    public function getMangLegalUser()
    {
        return $this->mangLegalUser;
    }

    /**
     * Set mangWallet
     *
     * @param string $mangWallet
     * @return Mangopay
     */
    public function setMangWallet($mangWallet)
    {
        $this->mangWallet = $mangWallet;

        return $this;
    }

    /**
     * Get mangWallet
     *
     * @return string 
     */
    public function getMangWallet()
    {
        return $this->mangWallet;
    }
}
