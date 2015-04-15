<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozSession
 *
 * @ORM\Table(name="poz_session")
 * @ORM\Entity
 */
class PozSession
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_user_id", type="integer", nullable=false)
     */
    private $sessionUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_id", type="integer", nullable=false)
     */
    private $sessionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_created", type="datetime", nullable=false)
     */
    private $sessionCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="session_url", type="text", nullable=false)
     */
    private $sessionUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_rank", type="integer", nullable=false)
     */
    private $sessionRank;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sessionUserId
     *
     * @param integer $sessionUserId
     * @return PozSession
     */
    public function setSessionUserId($sessionUserId)
    {
        $this->sessionUserId = $sessionUserId;

        return $this;
    }

    /**
     * Get sessionUserId
     *
     * @return integer 
     */
    public function getSessionUserId()
    {
        return $this->sessionUserId;
    }

    /**
     * Set sessionId
     *
     * @param integer $sessionId
     * @return PozSession
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return integer 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionCreated
     *
     * @param \DateTime $sessionCreated
     * @return PozSession
     */
    public function setSessionCreated($sessionCreated)
    {
        $this->sessionCreated = $sessionCreated;

        return $this;
    }

    /**
     * Get sessionCreated
     *
     * @return \DateTime 
     */
    public function getSessionCreated()
    {
        return $this->sessionCreated;
    }

    /**
     * Set sessionUrl
     *
     * @param string $sessionUrl
     * @return PozSession
     */
    public function setSessionUrl($sessionUrl)
    {
        $this->sessionUrl = $sessionUrl;

        return $this;
    }

    /**
     * Get sessionUrl
     *
     * @return string 
     */
    public function getSessionUrl()
    {
        return $this->sessionUrl;
    }

    /**
     * Set sessionRank
     *
     * @param integer $sessionRank
     * @return PozSession
     */
    public function setSessionRank($sessionRank)
    {
        $this->sessionRank = $sessionRank;

        return $this;
    }

    /**
     * Get sessionRank
     *
     * @return integer 
     */
    public function getSessionRank()
    {
        return $this->sessionRank;
    }
}
