<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caroussel
 *
 * @ORM\Table(name="caroussel", indexes={@ORM\Index(name="caro_user_id", columns={"caro_user_id"}), @ORM\Index(name="caro_limitation", columns={"caro_limitation"})})
 * @ORM\Entity
 */
class Caroussel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="caro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $caroId;

    /**
     * @var integer
     *
     * @ORM\Column(name="caro_limitation", type="integer", nullable=true)
     */
    private $caroLimitation;

    /**
     * @var string
     *
     * @ORM\Column(name="caro_text", type="text", nullable=false)
     */
    private $caroText;

    /**
     * @var integer
     *
     * @ORM\Column(name="caro_user_id", type="integer", nullable=true)
     */
    private $caroUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="caro_weight", type="integer", nullable=false)
     */
    private $caroWeight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="caro_date_from", type="date", nullable=false)
     */
    private $caroDateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="caro_date_to", type="date", nullable=false)
     */
    private $caroDateTo;



    /**
     * Get caroId
     *
     * @return integer 
     */
    public function getCaroId()
    {
        return $this->caroId;
    }

    /**
     * Set caroLimitation
     *
     * @param integer $caroLimitation
     * @return Caroussel
     */
    public function setCaroLimitation($caroLimitation)
    {
        $this->caroLimitation = $caroLimitation;

        return $this;
    }

    /**
     * Get caroLimitation
     *
     * @return integer 
     */
    public function getCaroLimitation()
    {
        return $this->caroLimitation;
    }

    /**
     * Set caroText
     *
     * @param string $caroText
     * @return Caroussel
     */
    public function setCaroText($caroText)
    {
        $this->caroText = $caroText;

        return $this;
    }

    /**
     * Get caroText
     *
     * @return string 
     */
    public function getCaroText()
    {
        return $this->caroText;
    }

    /**
     * Set caroUserId
     *
     * @param integer $caroUserId
     * @return Caroussel
     */
    public function setCaroUserId($caroUserId)
    {
        $this->caroUserId = $caroUserId;

        return $this;
    }

    /**
     * Get caroUserId
     *
     * @return integer 
     */
    public function getCaroUserId()
    {
        return $this->caroUserId;
    }

    /**
     * Set caroWeight
     *
     * @param integer $caroWeight
     * @return Caroussel
     */
    public function setCaroWeight($caroWeight)
    {
        $this->caroWeight = $caroWeight;

        return $this;
    }

    /**
     * Get caroWeight
     *
     * @return integer 
     */
    public function getCaroWeight()
    {
        return $this->caroWeight;
    }

    /**
     * Set caroDateFrom
     *
     * @param \DateTime $caroDateFrom
     * @return Caroussel
     */
    public function setCaroDateFrom($caroDateFrom)
    {
        $this->caroDateFrom = $caroDateFrom;

        return $this;
    }

    /**
     * Get caroDateFrom
     *
     * @return \DateTime 
     */
    public function getCaroDateFrom()
    {
        return $this->caroDateFrom;
    }

    /**
     * Set caroDateTo
     *
     * @param \DateTime $caroDateTo
     * @return Caroussel
     */
    public function setCaroDateTo($caroDateTo)
    {
        $this->caroDateTo = $caroDateTo;

        return $this;
    }

    /**
     * Get caroDateTo
     *
     * @return \DateTime 
     */
    public function getCaroDateTo()
    {
        return $this->caroDateTo;
    }
}
