<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialTitle
 *
 * @ORM\Table(name="special_title")
 * @ORM\Entity
 */
class SpecialTitle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="spec_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $specId;

    /**
     * @var string
     *
     * @ORM\Column(name="spec_name", type="string", length=255, nullable=false)
     */
    private $specName;



    /**
     * Get specId
     *
     * @return integer 
     */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * Set specName
     *
     * @param string $specName
     * @return SpecialTitle
     */
    public function setSpecName($specName)
    {
        $this->specName = $specName;

        return $this;
    }

    /**
     * Get specName
     *
     * @return string 
     */
    public function getSpecName()
    {
        return $this->specName;
    }
}
