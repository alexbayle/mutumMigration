<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="addr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addrId;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_address", type="string", length=255, nullable=false)
     */
    private $addrAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_zip", type="string", length=5, nullable=false)
     */
    private $addrZip;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_city", type="string", length=255, nullable=false)
     */
    private $addrCity;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_latitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $addrLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_longitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $addrLongitude;

//    /**
//     * @ORM\OneToMany(targetEntity="LocatedProduct", mappedBy="address")
//     * @ORM\JoinColumn(name="addr_id", referencedColumnName="locp_addr_id")
//     */
    private $products;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function setAddrId($id)
    {
        $this->addrId = $id;
    }

    /**
     * Get addrId
     *
     * @return integer
     */
    public function getAddrId()
    {
        return $this->addrId;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = new ArrayCollection();
        foreach ($products as $product) {
            $this->addProduct($product);
        }
    }

    public function addProduct(Product $product)
    {
//        if (!$product->getAddress()) {
//            $product->setAddress($this);
            $this->products[] = $product;
//        }
    }

    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Set addrAddress
     *
     * @param string $addrAddress
     * @return Address
     */
    public function setAddrAddress($addrAddress)
    {
        $this->addrAddress = $addrAddress;

        return $this;
    }

    /**
     * Get addrAddress
     *
     * @return string
     */
    public function getAddrAddress()
    {
        return $this->addrAddress;
    }

    /**
     * Set addrZip
     *
     * @param string $addrZip
     * @return Address
     */
    public function setAddrZip($addrZip)
    {
        $this->addrZip = $addrZip;

        return $this;
    }

    /**
     * Get addrZip
     *
     * @return string
     */
    public function getAddrZip()
    {
        return $this->addrZip;
    }

    /**
     * Set addrCity
     *
     * @param string $addrCity
     * @return Address
     */
    public function setAddrCity($addrCity)
    {
        $this->addrCity = $addrCity;

        return $this;
    }

    /**
     * Get addrCity
     *
     * @return string
     */
    public function getAddrCity()
    {
        return $this->addrCity;
    }

    /**
     * Set addrLatitude
     *
     * @param string $addrLatitude
     * @return Address
     */
    public function setAddrLatitude($addrLatitude)
    {
        $this->addrLatitude = $addrLatitude;

        return $this;
    }

    /**
     * Get addrLatitude
     *
     * @return string
     */
    public function getAddrLatitude()
    {
        return $this->addrLatitude;
    }

    /**
     * Set addrLongitude
     *
     * @param string $addrLongitude
     * @return Address
     */
    public function setAddrLongitude($addrLongitude)
    {
        $this->addrLongitude = $addrLongitude;

        return $this;
    }

    /**
     * Get addrLongitude
     *
     * @return string
     */
    public function getAddrLongitude()
    {
        return $this->addrLongitude;
    }


}
