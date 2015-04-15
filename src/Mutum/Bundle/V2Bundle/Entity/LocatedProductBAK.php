<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocatedProduct
 *
 * @  ORM\Table(name="located_product")})
 * @  ORM\Entity
 */
class LocatedProductBAK
{
//    /**
//     * @ var integer
//     *
//     * @ ORM\Column(name="locp_prod_id", type="integer", nullable=false)
//     * @ ORM\Id
//     * @ ORM\GeneratedValue(strategy="NONE")
//     */
//    private $locpProdId;
//
//
//
//    /**
//     * @ var integer
//     *
//     * @ ORM\Column(name="locp_addr_id", type="integer", nullable=false)
//     * @ ORM\Id
//     * @ ORM\GeneratedValue(strategy="NONE")
//     */
//    private $locpAddrId;




    /**
     * @ ORM\Id
     * @ ORM\GeneratedValue(strategy="NONE")
     * @ ORM\OneToOne(targetEntity="Product", inversedBy="address")
     * @ ORM\JoinColumn(name="locp_prod_id", referencedColumnName="prod_id")
     */
    private $product;

    /**
     * @  ORM\Id
     * @  ORM\GeneratedValue(strategy="NONE")
     * @ ORM\OneToOne(targetEntity="Address", inversedBy="product")
     * @ ORM\JoinColumn(name="locp_addr_id", referencedColumnName="addr_id")
     */
    private $address;

    /**
     * @ return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @ param mixed $address
     */
    public function setAddress(Address $address = null)
    {
        $this->address = $address;
    }

    /**
     * @ return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @ param mixed $product
     */
    public function setProduct(Product $product = null)
    {
        $this->product = $product;
    }





//    /**
//     * Set locpProdId
//     *
//     * @ param integer $locpProdId
//     * @ return LocatedProduct
//     */
//    public function setLocpProdId($locpProdId)
//    {
//        $this->locpProdId = $locpProdId;
//
//        return $this;
//    }
//
//    /**
//     * Get locpProdId
//     *
//     * @ return integer
//     */
//    public function getLocpProdId()
//    {
//        return $this->locpProdId;
//    }
//
//    /**
//     * Set locpAddrId
//     *
//     * @ param integer $locpAddrId
//     * @ return LocatedProduct
//     */
//    public function setLocpAddrId($locpAddrId)
//    {
//        $this->locpAddrId = $locpAddrId;
//
//        return $this;
//    }
//
//    /**
//     * Get locpAddrId
//     *
//     * @ return integer
//     */
//    public function getLocpAddrId()
//    {
//        return $this->locpAddrId;
//    }
}
