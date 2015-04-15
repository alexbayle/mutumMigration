<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abuse
 *
 * @ORM\Table(name="abuse", indexes={@ORM\Index(name="fk_abuse_type", columns={"abus_type"})})
 * @ORM\Entity
 */
class Abuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="abus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $abusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="abus_type", type="integer", nullable=false)
     */
    private $abusType;

    /**
     * @var integer
     *
     * @ORM\Column(name="abus_table_id", type="integer", nullable=false)
     */
    private $abusTableId;

    /**
     * @var string
     *
     * @ORM\Column(name="abus_title", type="string", length=255, nullable=false)
     */
    private $abusTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="abus_text", type="string", length=255, nullable=false)
     */
    private $abusText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abus_date_creation", type="datetime", nullable=false)
     */
    private $abusDateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abus_aborted", type="boolean", nullable=false)
     */
    private $abusAborted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abus_seen", type="boolean", nullable=false)
     */
    private $abusSeen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abus_archived", type="boolean", nullable=false)
     */
    private $abusArchived;



    /**
     * Get abusId
     *
     * @return integer 
     */
    public function getAbusId()
    {
        return $this->abusId;
    }

    /**
     * Set abusType
     *
     * @param integer $abusType
     * @return Abuse
     */
    public function setAbusType($abusType)
    {
        $this->abusType = $abusType;

        return $this;
    }

    /**
     * Get abusType
     *
     * @return integer 
     */
    public function getAbusType()
    {
        return $this->abusType;
    }

    /**
     * Set abusTableId
     *
     * @param integer $abusTableId
     * @return Abuse
     */
    public function setAbusTableId($abusTableId)
    {
        $this->abusTableId = $abusTableId;

        return $this;
    }

    /**
     * Get abusTableId
     *
     * @return integer 
     */
    public function getAbusTableId()
    {
        return $this->abusTableId;
    }

    /**
     * Set abusTitle
     *
     * @param string $abusTitle
     * @return Abuse
     */
    public function setAbusTitle($abusTitle)
    {
        $this->abusTitle = $abusTitle;

        return $this;
    }

    /**
     * Get abusTitle
     *
     * @return string 
     */
    public function getAbusTitle()
    {
        return $this->abusTitle;
    }

    /**
     * Set abusText
     *
     * @param string $abusText
     * @return Abuse
     */
    public function setAbusText($abusText)
    {
        $this->abusText = $abusText;

        return $this;
    }

    /**
     * Get abusText
     *
     * @return string 
     */
    public function getAbusText()
    {
        return $this->abusText;
    }

    /**
     * Set abusDateCreation
     *
     * @param \DateTime $abusDateCreation
     * @return Abuse
     */
    public function setAbusDateCreation($abusDateCreation)
    {
        $this->abusDateCreation = $abusDateCreation;

        return $this;
    }

    /**
     * Get abusDateCreation
     *
     * @return \DateTime 
     */
    public function getAbusDateCreation()
    {
        return $this->abusDateCreation;
    }

    /**
     * Set abusAborted
     *
     * @param boolean $abusAborted
     * @return Abuse
     */
    public function setAbusAborted($abusAborted)
    {
        $this->abusAborted = $abusAborted;

        return $this;
    }

    /**
     * Get abusAborted
     *
     * @return boolean 
     */
    public function getAbusAborted()
    {
        return $this->abusAborted;
    }

    /**
     * Set abusSeen
     *
     * @param boolean $abusSeen
     * @return Abuse
     */
    public function setAbusSeen($abusSeen)
    {
        $this->abusSeen = $abusSeen;

        return $this;
    }

    /**
     * Get abusSeen
     *
     * @return boolean 
     */
    public function getAbusSeen()
    {
        return $this->abusSeen;
    }

    /**
     * Set abusArchived
     *
     * @param boolean $abusArchived
     * @return Abuse
     */
    public function setAbusArchived($abusArchived)
    {
        $this->abusArchived = $abusArchived;

        return $this;
    }

    /**
     * Get abusArchived
     *
     * @return boolean 
     */
    public function getAbusArchived()
    {
        return $this->abusArchived;
    }
}
