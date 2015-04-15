<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity
 */
class Transaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tran_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tranId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Buy")
     * @ORM\JoinColumn(name="tran_offer", referencedColumnName="buy_id")
     */
    private $buy;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_payin_id", type="integer", nullable=false)
     */
    private $tranPayinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_card_id", type="integer", nullable=false)
     */
    private $tranCardId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tran_date_creation", type="datetime", nullable=false)
     */
    private $tranDateCreation;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="trans_user_id", referencedColumnName="user_id")
     */
    private $user;



    /**
     * Get tranId
     *
     * @return integer 
     */
    public function getTranId()
    {
        return $this->tranId;
    }


    /**
     * Set tranPayinId
     *
     * @param integer $tranPayinId
     * @return Transaction
     */
    public function setTranPayinId($tranPayinId)
    {
        $this->tranPayinId = $tranPayinId;

        return $this;
    }

    /**
     * Get tranPayinId
     *
     * @return integer 
     */
    public function getTranPayinId()
    {
        return $this->tranPayinId;
    }

    /**
     * Set tranCardId
     *
     * @param integer $tranCardId
     * @return Transaction
     */
    public function setTranCardId($tranCardId)
    {
        $this->tranCardId = $tranCardId;

        return $this;
    }

    /**
     * Get tranCardId
     *
     * @return integer 
     */
    public function getTranCardId()
    {
        return $this->tranCardId;
    }

    /**
     * Set tranDateCreation
     *
     * @param \DateTime $tranDateCreation
     * @return Transaction
     */
    public function setTranDateCreation($tranDateCreation)
    {
        $this->tranDateCreation = $tranDateCreation;

        return $this;
    }

    /**
     * Get tranDateCreation
     *
     * @return \DateTime 
     */
    public function getTranDateCreation()
    {
        return $this->tranDateCreation;
    }


    /**
     * @return int
     */
    public function getBuy()
    {
        return $this->buy;
    }


    /**
     * @param Buy $buy
     */
    public function setBuy(Buy $buy)
    {
        $this->buy = $buy;
    }


    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }


}
