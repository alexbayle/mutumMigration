<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JoinCommunity
 *
 * @ORM\Table(name="join_community")
 * @ORM\Entity
 */
class JoinCommunity
{
    /**
     * @var integer
     *
     * @ ORM\Column(name="join_comm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @ORM\ManyToOne(targetEntity="Community", inversedBy="join_communities", cascade={"persist"})
     * @ORM\JoinColumn(name="join_comm_id", referencedColumnName="comm_id")
     */
    private $community;

    /**
     * @var integer
     *
     * @ORM\Column(name="join_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @ ORM\ManyToOne(targetEntity="User", inversedBy="join_communities")
     * @ ORM\JoinColumn(name="join_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="join_rank", type="string", length=255, nullable=false)
     */
    private $joinRank;

    /**
     * @var string
     *
     * @ORM\Column(name="join_status", type="string", length=1, nullable=false)
     */
    private $joinStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="join_desc", type="text", nullable=false)
     */
    private $joinDesc;

    /**
     * @return int
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * @param int $community
     */
    public function setCommunity($community)
    {
        $this->community = $community;
    }

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



    /**
     * Set joinRank
     *
     * @param string $joinRank
     * @return JoinCommunity
     */
    public function setJoinRank($joinRank)
    {
        $this->joinRank = $joinRank;

        return $this;
    }

    /**
     * Get joinRank
     *
     * @return string 
     */
    public function getJoinRank()
    {
        return $this->joinRank;
    }

    /**
     * Set joinStatus
     *
     * @param string $joinStatus
     * @return JoinCommunity
     */
    public function setJoinStatus($joinStatus)
    {
        $this->joinStatus = $joinStatus;

        return $this;
    }

    /**
     * Get joinStatus
     *
     * @return string 
     */
    public function getJoinStatus()
    {
        return $this->joinStatus;
    }

    /**
     * Set joinDesc
     *
     * @param string $joinDesc
     * @return JoinCommunity
     */
    public function setJoinDesc($joinDesc)
    {
        $this->joinDesc = $joinDesc;

        return $this;
    }

    /**
     * Get joinDesc
     *
     * @return string 
     */
    public function getJoinDesc()
    {
        return $this->joinDesc;
    }
}
