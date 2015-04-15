<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LimitationField
 *
 * @ORM\Table(name="limitation_field", indexes={@ORM\Index(name="limf_limi_id", columns={"limf_limi_id"}), @ORM\Index(name="limf_type", columns={"limf_type"})})
 * @ORM\Entity
 */
class LimitationField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="limf_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $limfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="limf_table_id", type="integer", nullable=false)
     */
    private $limfTableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="limf_limi_id", type="integer", nullable=false)
     */
    private $limfLimiId;

    /**
     * @var integer
     *
     * @ORM\Column(name="limf_type", type="integer", nullable=false)
     */
    private $limfType;



    /**
     * Get limfId
     *
     * @return integer 
     */
    public function getLimfId()
    {
        return $this->limfId;
    }

    /**
     * Set limfTableId
     *
     * @param integer $limfTableId
     * @return LimitationField
     */
    public function setLimfTableId($limfTableId)
    {
        $this->limfTableId = $limfTableId;

        return $this;
    }

    /**
     * Get limfTableId
     *
     * @return integer 
     */
    public function getLimfTableId()
    {
        return $this->limfTableId;
    }

    /**
     * Set limfLimiId
     *
     * @param integer $limfLimiId
     * @return LimitationField
     */
    public function setLimfLimiId($limfLimiId)
    {
        $this->limfLimiId = $limfLimiId;

        return $this;
    }

    /**
     * Get limfLimiId
     *
     * @return integer 
     */
    public function getLimfLimiId()
    {
        return $this->limfLimiId;
    }

    /**
     * Set limfType
     *
     * @param integer $limfType
     * @return LimitationField
     */
    public function setLimfType($limfType)
    {
        $this->limfType = $limfType;

        return $this;
    }

    /**
     * Get limfType
     *
     * @return integer 
     */
    public function getLimfType()
    {
        return $this->limfType;
    }
}
