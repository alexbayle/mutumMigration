<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozAbuse
 *
 * @ORM\Table(name="poz_abuse")
 * @ORM\Entity
 */
class PozAbuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $abuseId;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_user_id", type="integer", nullable=false)
     */
    private $abuseUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_type", type="integer", nullable=false)
     */
    private $abuseType;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_dest_id", type="integer", nullable=false)
     */
    private $abuseDestId;

    /**
     * @var string
     *
     * @ORM\Column(name="abuse_title", type="string", length=255, nullable=false)
     */
    private $abuseTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="abuse_text", type="text", nullable=false)
     */
    private $abuseText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abuse_created", type="datetime", nullable=false)
     */
    private $abuseCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_aborded", type="integer", nullable=false)
     */
    private $abuseAborded;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_seen", type="integer", nullable=false)
     */
    private $abuseSeen;

    /**
     * @var integer
     *
     * @ORM\Column(name="abuse_archived", type="integer", nullable=false)
     */
    private $abuseArchived;



    /**
     * Get abuseId
     *
     * @return integer 
     */
    public function getAbuseId()
    {
        return $this->abuseId;
    }

    /**
     * Set abuseUserId
     *
     * @param integer $abuseUserId
     * @return PozAbuse
     */
    public function setAbuseUserId($abuseUserId)
    {
        $this->abuseUserId = $abuseUserId;

        return $this;
    }

    /**
     * Get abuseUserId
     *
     * @return integer 
     */
    public function getAbuseUserId()
    {
        return $this->abuseUserId;
    }

    /**
     * Set abuseType
     *
     * @param integer $abuseType
     * @return PozAbuse
     */
    public function setAbuseType($abuseType)
    {
        $this->abuseType = $abuseType;

        return $this;
    }

    /**
     * Get abuseType
     *
     * @return integer 
     */
    public function getAbuseType()
    {
        return $this->abuseType;
    }

    /**
     * Set abuseDestId
     *
     * @param integer $abuseDestId
     * @return PozAbuse
     */
    public function setAbuseDestId($abuseDestId)
    {
        $this->abuseDestId = $abuseDestId;

        return $this;
    }

    /**
     * Get abuseDestId
     *
     * @return integer 
     */
    public function getAbuseDestId()
    {
        return $this->abuseDestId;
    }

    /**
     * Set abuseTitle
     *
     * @param string $abuseTitle
     * @return PozAbuse
     */
    public function setAbuseTitle($abuseTitle)
    {
        $this->abuseTitle = $abuseTitle;

        return $this;
    }

    /**
     * Get abuseTitle
     *
     * @return string 
     */
    public function getAbuseTitle()
    {
        return $this->abuseTitle;
    }

    /**
     * Set abuseText
     *
     * @param string $abuseText
     * @return PozAbuse
     */
    public function setAbuseText($abuseText)
    {
        $this->abuseText = $abuseText;

        return $this;
    }

    /**
     * Get abuseText
     *
     * @return string 
     */
    public function getAbuseText()
    {
        return $this->abuseText;
    }

    /**
     * Set abuseCreated
     *
     * @param \DateTime $abuseCreated
     * @return PozAbuse
     */
    public function setAbuseCreated($abuseCreated)
    {
        $this->abuseCreated = $abuseCreated;

        return $this;
    }

    /**
     * Get abuseCreated
     *
     * @return \DateTime 
     */
    public function getAbuseCreated()
    {
        return $this->abuseCreated;
    }

    /**
     * Set abuseAborded
     *
     * @param integer $abuseAborded
     * @return PozAbuse
     */
    public function setAbuseAborded($abuseAborded)
    {
        $this->abuseAborded = $abuseAborded;

        return $this;
    }

    /**
     * Get abuseAborded
     *
     * @return integer 
     */
    public function getAbuseAborded()
    {
        return $this->abuseAborded;
    }

    /**
     * Set abuseSeen
     *
     * @param integer $abuseSeen
     * @return PozAbuse
     */
    public function setAbuseSeen($abuseSeen)
    {
        $this->abuseSeen = $abuseSeen;

        return $this;
    }

    /**
     * Get abuseSeen
     *
     * @return integer 
     */
    public function getAbuseSeen()
    {
        return $this->abuseSeen;
    }

    /**
     * Set abuseArchived
     *
     * @param integer $abuseArchived
     * @return PozAbuse
     */
    public function setAbuseArchived($abuseArchived)
    {
        $this->abuseArchived = $abuseArchived;

        return $this;
    }

    /**
     * Get abuseArchived
     *
     * @return integer 
     */
    public function getAbuseArchived()
    {
        return $this->abuseArchived;
    }
}
