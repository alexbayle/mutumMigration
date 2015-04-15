<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozBuy
 *
 * @ORM\Table(name="poz_buy")
 * @ORM\Entity
 */
class PozBuy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="buy_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $buyId;

    /**
     * @var string
     *
     * @ORM\Column(name="buy_name", type="string", length=255, nullable=false)
     */
    private $buyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="buy_price", type="integer", nullable=false)
     */
    private $buyPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="buy_gift", type="integer", nullable=false)
     */
    private $buyGift;

    /**
     * @var string
     *
     * @ORM\Column(name="buy_color", type="string", length=255, nullable=false)
     */
    private $buyColor;

    /**
     * @var string
     *
     * @ORM\Column(name="buy_color2", type="string", length=255, nullable=false)
     */
    private $buyColor2;

    /**
     * @var integer
     *
     * @ORM\Column(name="buy_active", type="integer", nullable=false)
     */
    private $buyActive;



    /**
     * Get buyId
     *
     * @return integer 
     */
    public function getBuyId()
    {
        return $this->buyId;
    }

    /**
     * Set buyName
     *
     * @param string $buyName
     * @return PozBuy
     */
    public function setBuyName($buyName)
    {
        $this->buyName = $buyName;

        return $this;
    }

    /**
     * Get buyName
     *
     * @return string 
     */
    public function getBuyName()
    {
        return $this->buyName;
    }

    /**
     * Set buyPrice
     *
     * @param integer $buyPrice
     * @return PozBuy
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;

        return $this;
    }

    /**
     * Get buyPrice
     *
     * @return integer 
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Set buyGift
     *
     * @param integer $buyGift
     * @return PozBuy
     */
    public function setBuyGift($buyGift)
    {
        $this->buyGift = $buyGift;

        return $this;
    }

    /**
     * Get buyGift
     *
     * @return integer 
     */
    public function getBuyGift()
    {
        return $this->buyGift;
    }

    /**
     * Set buyColor
     *
     * @param string $buyColor
     * @return PozBuy
     */
    public function setBuyColor($buyColor)
    {
        $this->buyColor = $buyColor;

        return $this;
    }

    /**
     * Get buyColor
     *
     * @return string 
     */
    public function getBuyColor()
    {
        return $this->buyColor;
    }

    /**
     * Set buyColor2
     *
     * @param string $buyColor2
     * @return PozBuy
     */
    public function setBuyColor2($buyColor2)
    {
        $this->buyColor2 = $buyColor2;

        return $this;
    }

    /**
     * Get buyColor2
     *
     * @return string 
     */
    public function getBuyColor2()
    {
        return $this->buyColor2;
    }

    /**
     * Set buyActive
     *
     * @param integer $buyActive
     * @return PozBuy
     */
    public function setBuyActive($buyActive)
    {
        $this->buyActive = $buyActive;

        return $this;
    }

    /**
     * Get buyActive
     *
     * @return integer 
     */
    public function getBuyActive()
    {
        return $this->buyActive;
    }
}
