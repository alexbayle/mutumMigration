<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementsCat
 *
 * @ORM\Table(name="achievements_cat")
 * @ORM\Entity
 */
class AchievementsCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="achc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $achcId;

    /**
     * @var string
     *
     * @ORM\Column(name="achc_name", type="string", length=255, nullable=false)
     */
    private $achcName;

    /**
     * @var integer
     *
     * @ORM\Column(name="achc_order", type="integer", nullable=false)
     */
    private $achcOrder;



    /**
     * Get achcId
     *
     * @return integer 
     */
    public function getAchcId()
    {
        return $this->achcId;
    }

    /**
     * Set achcName
     *
     * @param string $achcName
     * @return AchievementsCat
     */
    public function setAchcName($achcName)
    {
        $this->achcName = $achcName;

        return $this;
    }

    /**
     * Get achcName
     *
     * @return string 
     */
    public function getAchcName()
    {
        return $this->achcName;
    }

    /**
     * Set achcOrder
     *
     * @param integer $achcOrder
     * @return AchievementsCat
     */
    public function setAchcOrder($achcOrder)
    {
        $this->achcOrder = $achcOrder;

        return $this;
    }

    /**
     * Get achcOrder
     *
     * @return integer 
     */
    public function getAchcOrder()
    {
        return $this->achcOrder;
    }
}
