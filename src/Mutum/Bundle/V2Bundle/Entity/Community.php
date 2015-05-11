<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Community
 *
 * @ORM\Table(name="community")
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
     * @ORM\ManyToOne(targetEntity="CommunityCat", inversedBy="communities")
     * @ORM\JoinColumn(name="comm_cat", referencedColumnName="comc_id")
     */
    private $category;

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
     * @ORM\OneToMany(targetEntity="JoinCommunity", mappedBy="community", cascade={"persist"})
     */
    private $joinCommunities;

    public function __construct()
    {
        $this->joinCommunities = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getCommName()? : '';
    }


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
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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

    /**
     * @return mixed
     */
    public function getJoinCommunities()
    {
        return $this->joinCommunities;
    }

    /**
     * @param mixed $joinCommunities
     */
    public function setJoinCommunities($joinCommunities)
    {
        $this->joinCommunities = new ArrayCollection();
        foreach ($joinCommunities as $joinCommunity)
        {
            $this->addJoinCommunity = $joinCommunity;
        }
    }

    public function addJoinCommunities(JoinCommunity $joinCommunity)
    {
        $this->joinCommunities[] = $joinCommunity;
    }

    public function removeJoinCommunities(JoinCommunity $joinCommunity)
    {
        $this->joinCommunities->removeElement($joinCommunity);
    }

}
