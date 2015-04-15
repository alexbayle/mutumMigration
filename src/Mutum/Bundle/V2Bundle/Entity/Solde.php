<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solde
 *
 * @ORM\Table(name="solde", indexes={@ORM\Index(name="sold_user_id", columns={"sold_user_id"})})
 * @ORM\Entity
 */
class Solde
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sold_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soldId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sold_amount", type="integer", nullable=false)
     */
    private $soldAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sold_date_creation", type="datetime", nullable=false)
     */
    private $soldDateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="sold_user_id", type="integer", nullable=false)
     */
    private $soldUserId;



    /**
     * Get soldId
     *
     * @return integer 
     */
    public function getSoldId()
    {
        return $this->soldId;
    }

    /**
     * Set soldAmount
     *
     * @param integer $soldAmount
     * @return Solde
     */
    public function setSoldAmount($soldAmount)
    {
        $this->soldAmount = $soldAmount;

        return $this;
    }

    /**
     * Get soldAmount
     *
     * @return integer 
     */
    public function getSoldAmount()
    {
        return $this->soldAmount;
    }

    /**
     * Set soldDateCreation
     *
     * @param \DateTime $soldDateCreation
     * @return Solde
     */
    public function setSoldDateCreation($soldDateCreation)
    {
        $this->soldDateCreation = $soldDateCreation;

        return $this;
    }

    /**
     * Get soldDateCreation
     *
     * @return \DateTime 
     */
    public function getSoldDateCreation()
    {
        return $this->soldDateCreation;
    }

    /**
     * Set soldUserId
     *
     * @param integer $soldUserId
     * @return Solde
     */
    public function setSoldUserId($soldUserId)
    {
        $this->soldUserId = $soldUserId;

        return $this;
    }

    /**
     * Get soldUserId
     *
     * @return integer 
     */
    public function getSoldUserId()
    {
        return $this->soldUserId;
    }
}
