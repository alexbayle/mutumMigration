<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="sess_user_id", columns={"sess_user_id"})})
 * @ORM\Entity
 */
class Session
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sess_session_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sessSessionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sess_rank", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sessRank;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sess_date_creation", type="datetime", nullable=false)
     */
    private $sessDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="sess_url", type="string", length=1024, nullable=false)
     */
    private $sessUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="sess_user_id", type="integer", nullable=false)
     */
    private $sessUserId;



    /**
     * Set sessSessionId
     *
     * @param integer $sessSessionId
     * @return Session
     */
    public function setSessSessionId($sessSessionId)
    {
        $this->sessSessionId = $sessSessionId;

        return $this;
    }

    /**
     * Get sessSessionId
     *
     * @return integer 
     */
    public function getSessSessionId()
    {
        return $this->sessSessionId;
    }

    /**
     * Set sessRank
     *
     * @param integer $sessRank
     * @return Session
     */
    public function setSessRank($sessRank)
    {
        $this->sessRank = $sessRank;

        return $this;
    }

    /**
     * Get sessRank
     *
     * @return integer 
     */
    public function getSessRank()
    {
        return $this->sessRank;
    }

    /**
     * Set sessDateCreation
     *
     * @param \DateTime $sessDateCreation
     * @return Session
     */
    public function setSessDateCreation($sessDateCreation)
    {
        $this->sessDateCreation = $sessDateCreation;

        return $this;
    }

    /**
     * Get sessDateCreation
     *
     * @return \DateTime 
     */
    public function getSessDateCreation()
    {
        return $this->sessDateCreation;
    }

    /**
     * Set sessUrl
     *
     * @param string $sessUrl
     * @return Session
     */
    public function setSessUrl($sessUrl)
    {
        $this->sessUrl = $sessUrl;

        return $this;
    }

    /**
     * Get sessUrl
     *
     * @return string 
     */
    public function getSessUrl()
    {
        return $this->sessUrl;
    }

    /**
     * Set sessUserId
     *
     * @param integer $sessUserId
     * @return Session
     */
    public function setSessUserId($sessUserId)
    {
        $this->sessUserId = $sessUserId;

        return $this;
    }

    /**
     * Get sessUserId
     *
     * @return integer 
     */
    public function getSessUserId()
    {
        return $this->sessUserId;
    }
}
