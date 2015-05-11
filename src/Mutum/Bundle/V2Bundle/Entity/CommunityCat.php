<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityCat
 *
 * @ORM\Table(name="community_cat")
 * @ORM\Entity
 */
class CommunityCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comcId;

    /**
     * @var string
     *
     * @ORM\Column(name="comc_name", type="string", length=255, nullable=false)
     */
    private $comcName;

    /**
     * @ORM\OneToMany(targetEntity="Community", mappedBy="category")
     */
    private $communities;

    public function __construct()
    {
        $this->communities = new ArrayCollection();
    }

    /**
     * Get comcId
     *
     * @return integer
     */
    public function getComcId()
    {
        return $this->comcId;
    }

    /**
     * Set comcName
     *
     * @param string $comcName
     * @return CommunityCat
     */
    public function setComcName($comcName)
    {
        $this->comcName = $comcName;

        return $this;
    }

    /**
     * Get comcName
     *
     * @return string
     */
    public function getComcName()
    {
        return $this->comcName;
    }

    /**
     * @return mixed
     */
    public function getCommunities()
    {
        return $this->communities;
    }

    /**
     * @param mixed $communities
     */
    public function setCommunities($communities)
    {
        $this->communities = new ArrayCollection();
        foreach ($communities as $community) {
            $this->addCommunities($community);
        }
    }

    public function addCommunities(Community $community)
    {
        $community->setCategory($this);
        $this->communities[] = $community;
    }


    public function removeCommunities(Community $community)
    {
        $this->communities->removeElment($community);
    }

}
