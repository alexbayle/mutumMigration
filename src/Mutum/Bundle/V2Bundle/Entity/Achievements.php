<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achievements
 *
 * @ORM\Table(name="achievements", indexes={@ORM\Index(name="achi_cat", columns={"achi_cat"})})
 * @ORM\Entity
 */
class Achievements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="achi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $achiId;

    /**
     * @var string
     *
     * @ORM\Column(name="achi_name", type="string", length=255, nullable=false)
     */
    private $achiName;

    /**
     * @var string
     *
     * @ORM\Column(name="achi_desc", type="string", length=255, nullable=false)
     */
    private $achiDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="achi_title", type="string", length=255, nullable=false)
     */
    private $achiTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="achi_cat", type="integer", nullable=true)
     */
    private $achiCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="achi_order", type="integer", nullable=false)
     */
    private $achiOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="achi_win", type="integer", nullable=false)
     */
    private $achiWin;

    /**
     * @var string
     *
     * @ORM\Column(name="achi_condition", type="text", nullable=false)
     */
    private $achiCondition;



    /**
     * Get achiId
     *
     * @return integer 
     */
    public function getAchiId()
    {
        return $this->achiId;
    }

    /**
     * Set achiName
     *
     * @param string $achiName
     * @return Achievements
     */
    public function setAchiName($achiName)
    {
        $this->achiName = $achiName;

        return $this;
    }

    /**
     * Get achiName
     *
     * @return string 
     */
    public function getAchiName()
    {
        return $this->achiName;
    }

    /**
     * Set achiDesc
     *
     * @param string $achiDesc
     * @return Achievements
     */
    public function setAchiDesc($achiDesc)
    {
        $this->achiDesc = $achiDesc;

        return $this;
    }

    /**
     * Get achiDesc
     *
     * @return string 
     */
    public function getAchiDesc()
    {
        return $this->achiDesc;
    }

    /**
     * Set achiTitle
     *
     * @param string $achiTitle
     * @return Achievements
     */
    public function setAchiTitle($achiTitle)
    {
        $this->achiTitle = $achiTitle;

        return $this;
    }

    /**
     * Get achiTitle
     *
     * @return string 
     */
    public function getAchiTitle()
    {
        return $this->achiTitle;
    }

    /**
     * Set achiCat
     *
     * @param integer $achiCat
     * @return Achievements
     */
    public function setAchiCat($achiCat)
    {
        $this->achiCat = $achiCat;

        return $this;
    }

    /**
     * Get achiCat
     *
     * @return integer 
     */
    public function getAchiCat()
    {
        return $this->achiCat;
    }

    /**
     * Set achiOrder
     *
     * @param integer $achiOrder
     * @return Achievements
     */
    public function setAchiOrder($achiOrder)
    {
        $this->achiOrder = $achiOrder;

        return $this;
    }

    /**
     * Get achiOrder
     *
     * @return integer 
     */
    public function getAchiOrder()
    {
        return $this->achiOrder;
    }

    /**
     * Set achiWin
     *
     * @param integer $achiWin
     * @return Achievements
     */
    public function setAchiWin($achiWin)
    {
        $this->achiWin = $achiWin;

        return $this;
    }

    /**
     * Get achiWin
     *
     * @return integer 
     */
    public function getAchiWin()
    {
        return $this->achiWin;
    }

    /**
     * Set achiCondition
     *
     * @param string $achiCondition
     * @return Achievements
     */
    public function setAchiCondition($achiCondition)
    {
        $this->achiCondition = $achiCondition;

        return $this;
    }

    /**
     * Get achiCondition
     *
     * @return string 
     */
    public function getAchiCondition()
    {
        return $this->achiCondition;
    }
}
