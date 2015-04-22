<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="arti_state", columns={"arti_state"}), @ORM\Index(name="arti_cat", columns={"arti_cat"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    private $id;


    /**
     * @ORM\OneToOne(targetEntity="Product", inversedBy="article")
     * @ORM\JoinColumn(name="arti_prod_id", referencedColumnName="prod_id")
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="arti_price", type="integer", nullable=false)
     */
    private $artiPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="arti_length", type="integer", nullable=false)
     */
    private $artiLength;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CategoryArticle", inversedBy="articles", cascade={"persist"})
     * @ORM\JoinColumn(name="arti_cat", referencedColumnName="cata_id")
     */
    private $artiCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="arti_caution", type="integer", nullable=false)
     */
    private $artiCaution;

    /**
     * @var string
     *
     * @ORM\Column(name="arti_dates", type="text", nullable=false)
     */
    private $artiDates;

    /**
     * @var string
     *
     * @ORM\Column(name="arti_pictures", type="string", length=255, nullable=true)
     */
    private $artiPictures;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="ArticleState", inversedBy="articles")
     * @ORM\JoinColumn(name="arti_state", referencedColumnName="arts_id")
     */
    private $artiState;



    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        if ($product->getArticle()) {
            $product->setArticle($this);
        }
        $this->product = $product;
    }


    /**
     * Set artiPrice
     *
     * @param integer $artiPrice
     * @return Article
     */
    public function setArtiPrice($artiPrice)
    {
        $this->artiPrice = $artiPrice;

        return $this;
    }

    /**
     * Get artiPrice
     *
     * @return integer
     */
    public function getArtiPrice()
    {
        return $this->artiPrice;
    }

    /**
     * Set artiLength
     *
     * @param integer $artiLength
     * @return Article
     */
    public function setArtiLength($artiLength)
    {
        $this->artiLength = $artiLength;

        return $this;
    }

    /**
     * Get artiLength
     *
     * @return integer
     */
    public function getArtiLength()
    {
        return $this->artiLength;
    }

    /**
     * Set artiCat
     *
     * @param integer $artiCat
     * @return Article
     */
    public function setArtiCat(CategoryArticle $artiCat = null)
    {
        $this->artiCat = $artiCat;

        return $this;
    }

    /**
     * Get artiCat
     *
     * @return integer
     */
    public function getArtiCat()
    {
        return $this->artiCat;
    }

    /**
     * Set artiCaution
     *
     * @param integer $artiCaution
     * @return Article
     */
    public function setArtiCaution($artiCaution)
    {
        $this->artiCaution = $artiCaution;

        return $this;
    }

    /**
     * Get artiCaution
     *
     * @return integer
     */
    public function getArtiCaution()
    {
        return $this->artiCaution;
    }

    /**
     * Set artiDates
     *
     * @param string $artiDates
     * @return Article
     */
    public function setArtiDates($artiDates)
    {
        $dates = explode(',', $artiDates);
        foreach ($dates as $offset => $date) {
            $date = \DateTime::createFromFormat('d/m/Y', $date);
            if ($date instanceof \DateTime) {
                $dates[$offset] = $date->format('Y-m-d');
            }
        }
        $this->artiDates = json_encode($dates);

        return $this;
    }

    /**
     * Get artiDates
     *
     * @return string
     */
    public function getArtiDates()
    {
        return $this->artiDates;
    }

    /**
     * Set artiPictures
     *
     * @param string $artiPictures
     * @return Article
     */
    public function setArtiPictures($artiPictures)
    {
        $this->artiPictures = $artiPictures;

        return $this;
    }

    /**
     * Get artiPictures
     *
     * @return string
     */
    public function getArtiPictures()
    {
        return $this->artiPictures;
    }

    /**
     * @param ArticleState $artiState
     * @return $this
     */
    public function setArtiState(ArticleState $artiState)
    {
        $this->artiState = $artiState;

        return $this;
    }

    /**
     * Get artiState
     *
     * @return integer
     */
    public function getArtiState()
    {
        return $this->artiState;
    }
}
