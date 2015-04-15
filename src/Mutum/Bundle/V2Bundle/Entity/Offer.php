<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer")
 * @ORM\Entity
 */
class Offer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offeId;

    /**
     * @var string
     *
     * @ORM\Column(name="offe_name", type="string", length=255, nullable=false)
     */
    private $offeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="offe_price", type="integer", nullable=false)
     */
    private $offePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="offe_present", type="integer", nullable=false)
     */
    private $offePresent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="offe_active", type="boolean", nullable=false)
     */
    private $offeActive;



    /**
     * Get offeId
     *
     * @return integer 
     */
    public function getOffeId()
    {
        return $this->offeId;
    }

    /**
     * Set offeName
     *
     * @param string $offeName
     * @return Offer
     */
    public function setOffeName($offeName)
    {
        $this->offeName = $offeName;

        return $this;
    }

    /**
     * Get offeName
     *
     * @return string 
     */
    public function getOffeName()
    {
        return $this->offeName;
    }

    /**
     * Set offePrice
     *
     * @param integer $offePrice
     * @return Offer
     */
    public function setOffePrice($offePrice)
    {
        $this->offePrice = $offePrice;

        return $this;
    }

    /**
     * Get offePrice
     *
     * @return integer 
     */
    public function getOffePrice()
    {
        return $this->offePrice;
    }

    /**
     * Set offePresent
     *
     * @param integer $offePresent
     * @return Offer
     */
    public function setOffePresent($offePresent)
    {
        $this->offePresent = $offePresent;

        return $this;
    }

    /**
     * Get offePresent
     *
     * @return integer 
     */
    public function getOffePresent()
    {
        return $this->offePresent;
    }

    /**
     * Set offeActive
     *
     * @param boolean $offeActive
     * @return Offer
     */
    public function setOffeActive($offeActive)
    {
        $this->offeActive = $offeActive;

        return $this;
    }

    /**
     * Get offeActive
     *
     * @return boolean 
     */
    public function getOffeActive()
    {
        return $this->offeActive;
    }
}
