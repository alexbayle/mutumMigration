<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozArticle
 *
 * @ORM\Table(name="poz_article", indexes={@ORM\Index(name="poz_article_art_user_id", columns={"art_user_id"})})
 * @ORM\Entity
 */
class PozArticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="art_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artId;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_user_id", type="integer", nullable=false)
     */
    private $artUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="art_name", type="string", length=60, nullable=false)
     */
    private $artName;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_cat_id", type="integer", nullable=false)
     */
    private $artCatId;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_price", type="integer", nullable=false)
     */
    private $artPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_length", type="integer", nullable=false)
     */
    private $artLength;

    /**
     * @var string
     *
     * @ORM\Column(name="art_state", type="string", length=15, nullable=false)
     */
    private $artState;

    /**
     * @var string
     *
     * @ORM\Column(name="art_desc", type="text", nullable=false)
     */
    private $artDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="art_dispo", type="string", length=1, nullable=false)
     */
    private $artDispo;

    /**
     * @var string
     *
     * @ORM\Column(name="art_visible", type="string", length=1, nullable=false)
     */
    private $artVisible;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_caution", type="integer", nullable=false)
     */
    private $artCaution;

    /**
     * @var string
     *
     * @ORM\Column(name="art_dates", type="text", nullable=false)
     */
    private $artDates;

    /**
     * @var string
     *
     * @ORM\Column(name="art_pictures", type="text", nullable=false)
     */
    private $artPictures;

    /**
     * @var string
     *
     * @ORM\Column(name="art_address", type="string", length=60, nullable=false)
     */
    private $artAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="art_zip", type="string", length=5, nullable=false)
     */
    private $artZip;

    /**
     * @var string
     *
     * @ORM\Column(name="art_city", type="string", length=40, nullable=false)
     */
    private $artCity;

    /**
     * @var string
     *
     * @ORM\Column(name="art_latitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $artLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="art_longitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $artLongitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_win", type="integer", nullable=false)
     */
    private $artWin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_added", type="datetime", nullable=false)
     */
    private $artAdded;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_notation", type="integer", nullable=false)
     */
    private $artNotation;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_nb_notation", type="integer", nullable=false)
     */
    private $artNbNotation;

    /**
     * @var string
     *
     * @ORM\Column(name="art_deleted", type="string", length=1, nullable=false)
     */
    private $artDeleted;



    /**
     * Get artId
     *
     * @return integer 
     */
    public function getArtId()
    {
        return $this->artId;
    }

    /**
     * Set artUserId
     *
     * @param integer $artUserId
     * @return PozArticle
     */
    public function setArtUserId($artUserId)
    {
        $this->artUserId = $artUserId;

        return $this;
    }

    /**
     * Get artUserId
     *
     * @return integer 
     */
    public function getArtUserId()
    {
        return $this->artUserId;
    }

    /**
     * Set artName
     *
     * @param string $artName
     * @return PozArticle
     */
    public function setArtName($artName)
    {
        $this->artName = $artName;

        return $this;
    }

    /**
     * Get artName
     *
     * @return string 
     */
    public function getArtName()
    {
        return $this->artName;
    }

    /**
     * Set artCatId
     *
     * @param integer $artCatId
     * @return PozArticle
     */
    public function setArtCatId($artCatId)
    {
        $this->artCatId = $artCatId;

        return $this;
    }

    /**
     * Get artCatId
     *
     * @return integer 
     */
    public function getArtCatId()
    {
        return $this->artCatId;
    }

    /**
     * Set artPrice
     *
     * @param integer $artPrice
     * @return PozArticle
     */
    public function setArtPrice($artPrice)
    {
        $this->artPrice = $artPrice;

        return $this;
    }

    /**
     * Get artPrice
     *
     * @return integer 
     */
    public function getArtPrice()
    {
        return $this->artPrice;
    }

    /**
     * Set artLength
     *
     * @param integer $artLength
     * @return PozArticle
     */
    public function setArtLength($artLength)
    {
        $this->artLength = $artLength;

        return $this;
    }

    /**
     * Get artLength
     *
     * @return integer 
     */
    public function getArtLength()
    {
        return $this->artLength;
    }

    /**
     * Set artState
     *
     * @param string $artState
     * @return PozArticle
     */
    public function setArtState($artState)
    {
        $this->artState = $artState;

        return $this;
    }

    /**
     * Get artState
     *
     * @return string 
     */
    public function getArtState()
    {
        return $this->artState;
    }

    /**
     * Set artDesc
     *
     * @param string $artDesc
     * @return PozArticle
     */
    public function setArtDesc($artDesc)
    {
        $this->artDesc = $artDesc;

        return $this;
    }

    /**
     * Get artDesc
     *
     * @return string 
     */
    public function getArtDesc()
    {
        return $this->artDesc;
    }

    /**
     * Set artDispo
     *
     * @param string $artDispo
     * @return PozArticle
     */
    public function setArtDispo($artDispo)
    {
        $this->artDispo = $artDispo;

        return $this;
    }

    /**
     * Get artDispo
     *
     * @return string 
     */
    public function getArtDispo()
    {
        return $this->artDispo;
    }

    /**
     * Set artVisible
     *
     * @param string $artVisible
     * @return PozArticle
     */
    public function setArtVisible($artVisible)
    {
        $this->artVisible = $artVisible;

        return $this;
    }

    /**
     * Get artVisible
     *
     * @return string 
     */
    public function getArtVisible()
    {
        return $this->artVisible;
    }

    /**
     * Set artCaution
     *
     * @param integer $artCaution
     * @return PozArticle
     */
    public function setArtCaution($artCaution)
    {
        $this->artCaution = $artCaution;

        return $this;
    }

    /**
     * Get artCaution
     *
     * @return integer 
     */
    public function getArtCaution()
    {
        return $this->artCaution;
    }

    /**
     * Set artDates
     *
     * @param string $artDates
     * @return PozArticle
     */
    public function setArtDates($artDates)
    {
        $this->artDates = $artDates;

        return $this;
    }

    /**
     * Get artDates
     *
     * @return string 
     */
    public function getArtDates()
    {
        return $this->artDates;
    }

    /**
     * Set artPictures
     *
     * @param string $artPictures
     * @return PozArticle
     */
    public function setArtPictures($artPictures)
    {
        $this->artPictures = $artPictures;

        return $this;
    }

    /**
     * Get artPictures
     *
     * @return string 
     */
    public function getArtPictures()
    {
        return $this->artPictures;
    }

    /**
     * Set artAddress
     *
     * @param string $artAddress
     * @return PozArticle
     */
    public function setArtAddress($artAddress)
    {
        $this->artAddress = $artAddress;

        return $this;
    }

    /**
     * Get artAddress
     *
     * @return string 
     */
    public function getArtAddress()
    {
        return $this->artAddress;
    }

    /**
     * Set artZip
     *
     * @param string $artZip
     * @return PozArticle
     */
    public function setArtZip($artZip)
    {
        $this->artZip = $artZip;

        return $this;
    }

    /**
     * Get artZip
     *
     * @return string 
     */
    public function getArtZip()
    {
        return $this->artZip;
    }

    /**
     * Set artCity
     *
     * @param string $artCity
     * @return PozArticle
     */
    public function setArtCity($artCity)
    {
        $this->artCity = $artCity;

        return $this;
    }

    /**
     * Get artCity
     *
     * @return string 
     */
    public function getArtCity()
    {
        return $this->artCity;
    }

    /**
     * Set artLatitude
     *
     * @param string $artLatitude
     * @return PozArticle
     */
    public function setArtLatitude($artLatitude)
    {
        $this->artLatitude = $artLatitude;

        return $this;
    }

    /**
     * Get artLatitude
     *
     * @return string 
     */
    public function getArtLatitude()
    {
        return $this->artLatitude;
    }

    /**
     * Set artLongitude
     *
     * @param string $artLongitude
     * @return PozArticle
     */
    public function setArtLongitude($artLongitude)
    {
        $this->artLongitude = $artLongitude;

        return $this;
    }

    /**
     * Get artLongitude
     *
     * @return string 
     */
    public function getArtLongitude()
    {
        return $this->artLongitude;
    }

    /**
     * Set artWin
     *
     * @param integer $artWin
     * @return PozArticle
     */
    public function setArtWin($artWin)
    {
        $this->artWin = $artWin;

        return $this;
    }

    /**
     * Get artWin
     *
     * @return integer 
     */
    public function getArtWin()
    {
        return $this->artWin;
    }

    /**
     * Set artAdded
     *
     * @param \DateTime $artAdded
     * @return PozArticle
     */
    public function setArtAdded($artAdded)
    {
        $this->artAdded = $artAdded;

        return $this;
    }

    /**
     * Get artAdded
     *
     * @return \DateTime 
     */
    public function getArtAdded()
    {
        return $this->artAdded;
    }

    /**
     * Set artNotation
     *
     * @param integer $artNotation
     * @return PozArticle
     */
    public function setArtNotation($artNotation)
    {
        $this->artNotation = $artNotation;

        return $this;
    }

    /**
     * Get artNotation
     *
     * @return integer 
     */
    public function getArtNotation()
    {
        return $this->artNotation;
    }

    /**
     * Set artNbNotation
     *
     * @param integer $artNbNotation
     * @return PozArticle
     */
    public function setArtNbNotation($artNbNotation)
    {
        $this->artNbNotation = $artNbNotation;

        return $this;
    }

    /**
     * Get artNbNotation
     *
     * @return integer 
     */
    public function getArtNbNotation()
    {
        return $this->artNbNotation;
    }

    /**
     * Set artDeleted
     *
     * @param string $artDeleted
     * @return PozArticle
     */
    public function setArtDeleted($artDeleted)
    {
        $this->artDeleted = $artDeleted;

        return $this;
    }

    /**
     * Get artDeleted
     *
     * @return string 
     */
    public function getArtDeleted()
    {
        return $this->artDeleted;
    }
}
