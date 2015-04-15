<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozTransaction
 *
 * @ORM\Table(name="poz_transaction")
 * @ORM\Entity
 */
class PozTransaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transactionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_user_id", type="integer", nullable=false)
     */
    private $transactionUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_buy_id", type="integer", nullable=false)
     */
    private $transactionBuyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_payin_id", type="integer", nullable=false)
     */
    private $transactionPayinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_card_id", type="integer", nullable=false)
     */
    private $transactionCardId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transaction_datetime", type="datetime", nullable=false)
     */
    private $transactionDatetime;



    /**
     * Get transactionId
     *
     * @return integer 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set transactionUserId
     *
     * @param integer $transactionUserId
     * @return PozTransaction
     */
    public function setTransactionUserId($transactionUserId)
    {
        $this->transactionUserId = $transactionUserId;

        return $this;
    }

    /**
     * Get transactionUserId
     *
     * @return integer 
     */
    public function getTransactionUserId()
    {
        return $this->transactionUserId;
    }

    /**
     * Set transactionBuyId
     *
     * @param integer $transactionBuyId
     * @return PozTransaction
     */
    public function setTransactionBuyId($transactionBuyId)
    {
        $this->transactionBuyId = $transactionBuyId;

        return $this;
    }

    /**
     * Get transactionBuyId
     *
     * @return integer 
     */
    public function getTransactionBuyId()
    {
        return $this->transactionBuyId;
    }

    /**
     * Set transactionPayinId
     *
     * @param integer $transactionPayinId
     * @return PozTransaction
     */
    public function setTransactionPayinId($transactionPayinId)
    {
        $this->transactionPayinId = $transactionPayinId;

        return $this;
    }

    /**
     * Get transactionPayinId
     *
     * @return integer 
     */
    public function getTransactionPayinId()
    {
        return $this->transactionPayinId;
    }

    /**
     * Set transactionCardId
     *
     * @param integer $transactionCardId
     * @return PozTransaction
     */
    public function setTransactionCardId($transactionCardId)
    {
        $this->transactionCardId = $transactionCardId;

        return $this;
    }

    /**
     * Get transactionCardId
     *
     * @return integer 
     */
    public function getTransactionCardId()
    {
        return $this->transactionCardId;
    }

    /**
     * Set transactionDatetime
     *
     * @param \DateTime $transactionDatetime
     * @return PozTransaction
     */
    public function setTransactionDatetime($transactionDatetime)
    {
        $this->transactionDatetime = $transactionDatetime;

        return $this;
    }

    /**
     * Get transactionDatetime
     *
     * @return \DateTime 
     */
    public function getTransactionDatetime()
    {
        return $this->transactionDatetime;
    }
}
