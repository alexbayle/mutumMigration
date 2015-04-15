<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbuseType
 *
 * @ORM\Table(name="abuse_type")
 * @ORM\Entity
 */
class AbuseType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="abut_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $abutId;

    /**
     * @var string
     *
     * @ORM\Column(name="abut_text", type="string", length=255, nullable=false)
     */
    private $abutText;


    public function setAbutId($id)
    {
        $this->abutId = $id;
    }

    /**
     * Get abutId
     *
     * @return integer 
     */
    public function getAbutId()
    {
        return $this->abutId;
    }

    /**
     * Set abutText
     *
     * @param string $abutText
     * @return AbuseType
     */
    public function setAbutText($abutText)
    {
        $this->abutText = $abutText;

        return $this;
    }

    /**
     * Get abutText
     *
     * @return string 
     */
    public function getAbutText()
    {
        return $this->abutText;
    }
}
