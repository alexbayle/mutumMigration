<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RedeemGift
 *
 * @ORM\Table(name="redeem_gift", indexes={@ORM\Index(name="redg_gift_id", columns={"redg_gift_id"})})
 * @ORM\Entity
 */
class RedeemGift
{
    /**
     * @var integer
     *
     * @ORM\Column(name="redg_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $redgUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="redg_gift_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $redgGiftId;



    /**
     * Set redgUserId
     *
     * @param integer $redgUserId
     * @return RedeemGift
     */
    public function setRedgUserId($redgUserId)
    {
        $this->redgUserId = $redgUserId;

        return $this;
    }

    /**
     * Get redgUserId
     *
     * @return integer 
     */
    public function getRedgUserId()
    {
        return $this->redgUserId;
    }

    /**
     * Set redgGiftId
     *
     * @param integer $redgGiftId
     * @return RedeemGift
     */
    public function setRedgGiftId($redgGiftId)
    {
        $this->redgGiftId = $redgGiftId;

        return $this;
    }

    /**
     * Get redgGiftId
     *
     * @return integer 
     */
    public function getRedgGiftId()
    {
        return $this->redgGiftId;
    }
}
