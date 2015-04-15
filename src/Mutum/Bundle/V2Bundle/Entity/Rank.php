<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rank
 *
 * @ORM\Table(name="rank")
 * @ORM\Entity
 */
class Rank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rank_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rankId;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_name", type="string", length=255, nullable=false)
     */
    private $rankName;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_img", type="string", length=255, nullable=false)
     */
    private $rankImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank_amount", type="integer", nullable=false)
     */
    private $rankAmount;



    /**
     * Get rankId
     *
     * @return integer 
     */
    public function getRankId()
    {
        return $this->rankId;
    }

    /**
     * Set rankName
     *
     * @param string $rankName
     * @return Rank
     */
    public function setRankName($rankName)
    {
        $this->rankName = $rankName;

        return $this;
    }

    /**
     * Get rankName
     *
     * @return string 
     */
    public function getRankName()
    {
        return $this->rankName;
    }

    /**
     * Set rankImg
     *
     * @param string $rankImg
     * @return Rank
     */
    public function setRankImg($rankImg)
    {
        $this->rankImg = $rankImg;

        return $this;
    }

    /**
     * Get rankImg
     *
     * @return string 
     */
    public function getRankImg()
    {
        return $this->rankImg;
    }

    /**
     * Set rankAmount
     *
     * @param integer $rankAmount
     * @return Rank
     */
    public function setRankAmount($rankAmount)
    {
        $this->rankAmount = $rankAmount;

        return $this;
    }

    /**
     * Get rankAmount
     *
     * @return integer 
     */
    public function getRankAmount()
    {
        return $this->rankAmount;
    }
}
