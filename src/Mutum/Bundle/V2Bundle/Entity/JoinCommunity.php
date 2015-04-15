<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JoinCommunity
 *
 * @ORM\Table(name="join_community", indexes={@ORM\Index(name="join_user_id", columns={"join_user_id"})})
 * @ORM\Entity
 */
class JoinCommunity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="join_comm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $joinCommId;

    /**
     * @var integer
     *
     * @ORM\Column(name="join_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $joinUserId;

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
     * Set joinCommId
     *
     * @param integer $joinCommId
     * @return JoinCommunity
     */
    public function setJoinCommId($joinCommId)
    {
        $this->joinCommId = $joinCommId;

        return $this;
    }

    /**
     * Get joinCommId
     *
     * @return integer 
     */
    public function getJoinCommId()
    {
        return $this->joinCommId;
    }

    /**
     * Set joinUserId
     *
     * @param integer $joinUserId
     * @return JoinCommunity
     */
    public function setJoinUserId($joinUserId)
    {
        $this->joinUserId = $joinUserId;

        return $this;
    }

    /**
     * Get joinUserId
     *
     * @return integer 
     */
    public function getJoinUserId()
    {
        return $this->joinUserId;
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
