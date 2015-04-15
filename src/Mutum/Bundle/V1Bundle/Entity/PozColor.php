<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozColor
 *
 * @ORM\Table(name="poz_color")
 * @ORM\Entity
 */
class PozColor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="color_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $colorId;

    /**
     * @var string
     *
     * @ORM\Column(name="color_name", type="text", nullable=false)
     */
    private $colorName;



    /**
     * Get colorId
     *
     * @return integer 
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * Set colorName
     *
     * @param string $colorName
     * @return PozColor
     */
    public function setColorName($colorName)
    {
        $this->colorName = $colorName;

        return $this;
    }

    /**
     * Get colorName
     *
     * @return string 
     */
    public function getColorName()
    {
        return $this->colorName;
    }
}
