<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CautionAsk
 *
 * @ORM\Table(name="caution_ask", indexes={@ORM\Index(name="caua_caur_id", columns={"caua_caur_id"})})
 * @ORM\Entity
 */
class CautionAsk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="caua_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cauaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="caua_amount", type="integer", nullable=false)
     */
    private $cauaAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="caua_motif", type="string", length=255, nullable=false)
     */
    private $cauaMotif;

    /**
     * @var string
     *
     * @ORM\Column(name="caua_message", type="text", nullable=false)
     */
    private $cauaMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="caua_ask_date", type="datetime", nullable=false)
     */
    private $cauaAskDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="caua_caur_id", type="integer", nullable=true)
     */
    private $cauaCaurId;



    /**
     * Get cauaId
     *
     * @return integer 
     */
    public function getCauaId()
    {
        return $this->cauaId;
    }

    /**
     * Set cauaAmount
     *
     * @param integer $cauaAmount
     * @return CautionAsk
     */
    public function setCauaAmount($cauaAmount)
    {
        $this->cauaAmount = $cauaAmount;

        return $this;
    }

    /**
     * Get cauaAmount
     *
     * @return integer 
     */
    public function getCauaAmount()
    {
        return $this->cauaAmount;
    }

    /**
     * Set cauaMotif
     *
     * @param string $cauaMotif
     * @return CautionAsk
     */
    public function setCauaMotif($cauaMotif)
    {
        $this->cauaMotif = $cauaMotif;

        return $this;
    }

    /**
     * Get cauaMotif
     *
     * @return string 
     */
    public function getCauaMotif()
    {
        return $this->cauaMotif;
    }

    /**
     * Set cauaMessage
     *
     * @param string $cauaMessage
     * @return CautionAsk
     */
    public function setCauaMessage($cauaMessage)
    {
        $this->cauaMessage = $cauaMessage;

        return $this;
    }

    /**
     * Get cauaMessage
     *
     * @return string 
     */
    public function getCauaMessage()
    {
        return $this->cauaMessage;
    }

    /**
     * Set cauaAskDate
     *
     * @param \DateTime $cauaAskDate
     * @return CautionAsk
     */
    public function setCauaAskDate($cauaAskDate)
    {
        $this->cauaAskDate = $cauaAskDate;

        return $this;
    }

    /**
     * Get cauaAskDate
     *
     * @return \DateTime 
     */
    public function getCauaAskDate()
    {
        return $this->cauaAskDate;
    }

    /**
     * Set cauaCaurId
     *
     * @param integer $cauaCaurId
     * @return CautionAsk
     */
    public function setCauaCaurId($cauaCaurId)
    {
        $this->cauaCaurId = $cauaCaurId;

        return $this;
    }

    /**
     * Get cauaCaurId
     *
     * @return integer 
     */
    public function getCauaCaurId()
    {
        return $this->cauaCaurId;
    }
}
