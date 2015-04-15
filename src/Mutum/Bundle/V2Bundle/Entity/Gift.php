<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gift
 *
 * @ORM\Table(name="gift")
 * @ORM\Entity
 */
class Gift
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $giftId;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_code", type="string", length=8, nullable=false)
     */
    private $giftCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="gift_amount", type="integer", nullable=false)
     */
    private $giftAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="gift_nb_valid", type="integer", nullable=false)
     */
    private $giftNbValid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gift_nb_left", type="integer", nullable=false)
     */
    private $giftNbLeft;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_date_creation", type="datetime", nullable=false)
     */
    private $giftDateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_expiration", type="datetime", nullable=false)
     */
    private $giftExpiration;



    /**
     * Get giftId
     *
     * @return integer 
     */
    public function getGiftId()
    {
        return $this->giftId;
    }

    /**
     * Set giftCode
     *
     * @param string $giftCode
     * @return Gift
     */
    public function setGiftCode($giftCode)
    {
        $this->giftCode = $giftCode;

        return $this;
    }

    /**
     * Get giftCode
     *
     * @return string 
     */
    public function getGiftCode()
    {
        return $this->giftCode;
    }

    /**
     * Set giftAmount
     *
     * @param integer $giftAmount
     * @return Gift
     */
    public function setGiftAmount($giftAmount)
    {
        $this->giftAmount = $giftAmount;

        return $this;
    }

    /**
     * Get giftAmount
     *
     * @return integer 
     */
    public function getGiftAmount()
    {
        return $this->giftAmount;
    }

    /**
     * Set giftNbValid
     *
     * @param integer $giftNbValid
     * @return Gift
     */
    public function setGiftNbValid($giftNbValid)
    {
        $this->giftNbValid = $giftNbValid;

        return $this;
    }

    /**
     * Get giftNbValid
     *
     * @return integer 
     */
    public function getGiftNbValid()
    {
        return $this->giftNbValid;
    }

    /**
     * Set giftNbLeft
     *
     * @param integer $giftNbLeft
     * @return Gift
     */
    public function setGiftNbLeft($giftNbLeft)
    {
        $this->giftNbLeft = $giftNbLeft;

        return $this;
    }

    /**
     * Get giftNbLeft
     *
     * @return integer 
     */
    public function getGiftNbLeft()
    {
        return $this->giftNbLeft;
    }

    /**
     * Set giftDateCreation
     *
     * @param \DateTime $giftDateCreation
     * @return Gift
     */
    public function setGiftDateCreation($giftDateCreation)
    {
        $this->giftDateCreation = $giftDateCreation;

        return $this;
    }

    /**
     * Get giftDateCreation
     *
     * @return \DateTime 
     */
    public function getGiftDateCreation()
    {
        return $this->giftDateCreation;
    }

    /**
     * Set giftExpiration
     *
     * @param \DateTime $giftExpiration
     * @return Gift
     */
    public function setGiftExpiration($giftExpiration)
    {
        $this->giftExpiration = $giftExpiration;

        return $this;
    }

    /**
     * Get giftExpiration
     *
     * @return \DateTime 
     */
    public function getGiftExpiration()
    {
        return $this->giftExpiration;
    }
}
