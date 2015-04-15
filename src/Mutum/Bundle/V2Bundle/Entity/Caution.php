<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caution
 *
 * @ORM\Table(name="caution", indexes={@ORM\Index(name="caut_caua_id", columns={"caut_caua_id"})})
 * @ORM\Entity
 */
class Caution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="caut_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cautId;

    /**
     * @var integer
     *
     * @ORM\Column(name="caut_amount", type="integer", nullable=false)
     */
    private $cautAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="caut_card_id", type="integer", nullable=false)
     */
    private $cautCardId;

    /**
     * @var integer
     *
     * @ORM\Column(name="caut_caua_id", type="integer", nullable=true)
     */
    private $cautCauaId;



    /**
     * Get cautId
     *
     * @return integer 
     */
    public function getCautId()
    {
        return $this->cautId;
    }

    /**
     * Set cautAmount
     *
     * @param integer $cautAmount
     * @return Caution
     */
    public function setCautAmount($cautAmount)
    {
        $this->cautAmount = $cautAmount;

        return $this;
    }

    /**
     * Get cautAmount
     *
     * @return integer 
     */
    public function getCautAmount()
    {
        return $this->cautAmount;
    }

    /**
     * Set cautCardId
     *
     * @param integer $cautCardId
     * @return Caution
     */
    public function setCautCardId($cautCardId)
    {
        $this->cautCardId = $cautCardId;

        return $this;
    }

    /**
     * Get cautCardId
     *
     * @return integer 
     */
    public function getCautCardId()
    {
        return $this->cautCardId;
    }

    /**
     * Set cautCauaId
     *
     * @param integer $cautCauaId
     * @return Caution
     */
    public function setCautCauaId($cautCauaId)
    {
        $this->cautCauaId = $cautCauaId;

        return $this;
    }

    /**
     * Get cautCauaId
     *
     * @return integer 
     */
    public function getCautCauaId()
    {
        return $this->cautCauaId;
    }
}
