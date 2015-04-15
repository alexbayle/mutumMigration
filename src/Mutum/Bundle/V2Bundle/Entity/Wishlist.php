<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlist
 *
 * @ORM\Table(name="wishlist", indexes={@ORM\Index(name="wish_virp_id", columns={"wish_virp_id"}), @ORM\Index(name="wish_address", columns={"wish_address"})})
 * @ORM\Entity
 */
class Wishlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wish_post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wishPostId;

    /**
     * @var integer
     *
     * @ORM\Column(name="wish_virp_id", type="integer", nullable=false)
     */
    private $wishVirpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="wish_address", type="integer", nullable=false)
     */
    private $wishAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wish_date", type="date", nullable=false)
     */
    private $wishDate;

    /**
     * @var string
     *
     * @ORM\Column(name="wish_desc", type="text", nullable=false)
     */
    private $wishDesc;



    /**
     * Get wishPostId
     *
     * @return integer 
     */
    public function getWishPostId()
    {
        return $this->wishPostId;
    }

    /**
     * Set wishVirpId
     *
     * @param integer $wishVirpId
     * @return Wishlist
     */
    public function setWishVirpId($wishVirpId)
    {
        $this->wishVirpId = $wishVirpId;

        return $this;
    }

    /**
     * Get wishVirpId
     *
     * @return integer 
     */
    public function getWishVirpId()
    {
        return $this->wishVirpId;
    }

    /**
     * Set wishAddress
     *
     * @param integer $wishAddress
     * @return Wishlist
     */
    public function setWishAddress($wishAddress)
    {
        $this->wishAddress = $wishAddress;

        return $this;
    }

    /**
     * Get wishAddress
     *
     * @return integer 
     */
    public function getWishAddress()
    {
        return $this->wishAddress;
    }

    /**
     * Set wishDate
     *
     * @param \DateTime $wishDate
     * @return Wishlist
     */
    public function setWishDate($wishDate)
    {
        $this->wishDate = $wishDate;

        return $this;
    }

    /**
     * Get wishDate
     *
     * @return \DateTime 
     */
    public function getWishDate()
    {
        return $this->wishDate;
    }

    /**
     * Set wishDesc
     *
     * @param string $wishDesc
     * @return Wishlist
     */
    public function setWishDesc($wishDesc)
    {
        $this->wishDesc = $wishDesc;

        return $this;
    }

    /**
     * Get wishDesc
     *
     * @return string 
     */
    public function getWishDesc()
    {
        return $this->wishDesc;
    }
}
