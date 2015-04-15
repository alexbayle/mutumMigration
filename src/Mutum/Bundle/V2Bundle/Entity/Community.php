<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Community
 *
 * @ORM\Table(name="community", indexes={@ORM\Index(name="comm_cat", columns={"comm_cat"}), @ORM\Index(name="comm_address", columns={"comm_address"})})
 * @ORM\Entity
 */
class Community
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commId;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_name", type="string", length=255, nullable=false)
     */
    private $commName;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_desc", type="text", nullable=false)
     */
    private $commDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="comm_address", type="integer", nullable=false)
     */
    private $commAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="comm_cat", type="integer", nullable=false)
     */
    private $commCat;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_type", type="string", length=255, nullable=false)
     */
    private $commType;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_type_data", type="string", length=255, nullable=false)
     */
    private $commTypeData;



    /**
     * Get commId
     *
     * @return integer 
     */
    public function getCommId()
    {
        return $this->commId;
    }

    /**
     * Set commName
     *
     * @param string $commName
     * @return Community
     */
    public function setCommName($commName)
    {
        $this->commName = $commName;

        return $this;
    }

    /**
     * Get commName
     *
     * @return string 
     */
    public function getCommName()
    {
        return $this->commName;
    }

    /**
     * Set commDesc
     *
     * @param string $commDesc
     * @return Community
     */
    public function setCommDesc($commDesc)
    {
        $this->commDesc = $commDesc;

        return $this;
    }

    /**
     * Get commDesc
     *
     * @return string 
     */
    public function getCommDesc()
    {
        return $this->commDesc;
    }

    /**
     * Set commAddress
     *
     * @param integer $commAddress
     * @return Community
     */
    public function setCommAddress($commAddress)
    {
        $this->commAddress = $commAddress;

        return $this;
    }

    /**
     * Get commAddress
     *
     * @return integer 
     */
    public function getCommAddress()
    {
        return $this->commAddress;
    }

    /**
     * Set commCat
     *
     * @param integer $commCat
     * @return Community
     */
    public function setCommCat($commCat)
    {
        $this->commCat = $commCat;

        return $this;
    }

    /**
     * Get commCat
     *
     * @return integer 
     */
    public function getCommCat()
    {
        return $this->commCat;
    }

    /**
     * Set commType
     *
     * @param string $commType
     * @return Community
     */
    public function setCommType($commType)
    {
        $this->commType = $commType;

        return $this;
    }

    /**
     * Get commType
     *
     * @return string 
     */
    public function getCommType()
    {
        return $this->commType;
    }

    /**
     * Set commTypeData
     *
     * @param string $commTypeData
     * @return Community
     */
    public function setCommTypeData($commTypeData)
    {
        $this->commTypeData = $commTypeData;

        return $this;
    }

    /**
     * Get commTypeData
     *
     * @return string 
     */
    public function getCommTypeData()
    {
        return $this->commTypeData;
    }
}
