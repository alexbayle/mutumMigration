<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buy
 *
 * @ORM\Table(name="buy", uniqueConstraints={@ORM\UniqueConstraint(name="buy_slug", columns={"buy_slug"})})
 * @ORM\Entity
 */
class Buy
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
     * @var string
     *
     * @ORM\Column(name="buy_slug", type="string", length=255, nullable=true)
     */
    private $buySlug;

    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;



    public function setBuyId($id)
    {
        $this->buyId = $id;
    }

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
     * @return Buy
     */
    public function setBuyName($buyName)
    {
        $this->buyName = $buyName;
        $this->setBuySlug($buyName);

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
     * @return Buy
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
     * @return Buy
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
     * @return Buy
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
     * @return Buy
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
     * @return Buy
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

    /**
     * Set buySlug
     *
     * @param string $buySlug
     * @return Buy
     */
    public function setBuySlug($buySlug)
    {
        $buySlug = $this->slugify($buySlug);
        $this->buySlug = $buySlug;

        return $this;
    }

    protected function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        // trim
        $text = trim($text, '-');
        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }
        // lowercase
        $text = strtolower($text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        {
            return 'n-a';
        }
        return $text;
    }

    /**
     * Get buySlug
     *
     * @return string 
     */
    public function getBuySlug()
    {
        return $this->buySlug;
    }

    /**
     * @return mixed
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @param mixed $v1
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }
}
