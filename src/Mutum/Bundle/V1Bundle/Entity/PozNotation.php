<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozNotation
 *
 * @ORM\Table(name="poz_notation", indexes={@ORM\Index(name="notation_user_id", columns={"notation_user_id"}), @ORM\Index(name="notation_noter_user_id", columns={"notation_noter_user_id"})})
 * @ORM\Entity
 */
class PozNotation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notationId;

    /**
     * @var string
     *
     * @ORM\Column(name="notation_type", type="string", length=1, nullable=false)
     */
    private $notationType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="notation_datetime", type="datetime", nullable=false)
     */
    private $notationDatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="notation_req_id", type="integer", nullable=false)
     */
    private $notationReqId;

    /**
     * @var integer
     *
     * @ORM\Column(name="notation_user_id", type="integer", nullable=false)
     */
    private $notationUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="notation_noter_user_id", type="integer", nullable=false)
     */
    private $notationNoterUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="notation_art_id", type="integer", nullable=false)
     */
    private $notationArtId;

    /**
     * @var string
     *
     * @ORM\Column(name="notation_title", type="string", length=60, nullable=false)
     */
    private $notationTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="notation_text", type="text", nullable=false)
     */
    private $notationText;

    /**
     * @var integer
     *
     * @ORM\Column(name="notation_note", type="integer", nullable=false)
     */
    private $notationNote;



    /**
     * Get notationId
     *
     * @return integer 
     */
    public function getNotationId()
    {
        return $this->notationId;
    }

    /**
     * Set notationType
     *
     * @param string $notationType
     * @return PozNotation
     */
    public function setNotationType($notationType)
    {
        $this->notationType = $notationType;

        return $this;
    }

    /**
     * Get notationType
     *
     * @return string 
     */
    public function getNotationType()
    {
        return $this->notationType;
    }

    /**
     * Set notationDatetime
     *
     * @param \DateTime $notationDatetime
     * @return PozNotation
     */
    public function setNotationDatetime($notationDatetime)
    {
        $this->notationDatetime = $notationDatetime;

        return $this;
    }

    /**
     * Get notationDatetime
     *
     * @return \DateTime 
     */
    public function getNotationDatetime()
    {
        return $this->notationDatetime;
    }

    /**
     * Set notationReqId
     *
     * @param integer $notationReqId
     * @return PozNotation
     */
    public function setNotationReqId($notationReqId)
    {
        $this->notationReqId = $notationReqId;

        return $this;
    }

    /**
     * Get notationReqId
     *
     * @return integer 
     */
    public function getNotationReqId()
    {
        return $this->notationReqId;
    }

    /**
     * Set notationUserId
     *
     * @param integer $notationUserId
     * @return PozNotation
     */
    public function setNotationUserId($notationUserId)
    {
        $this->notationUserId = $notationUserId;

        return $this;
    }

    /**
     * Get notationUserId
     *
     * @return integer 
     */
    public function getNotationUserId()
    {
        return $this->notationUserId;
    }

    /**
     * Set notationNoterUserId
     *
     * @param integer $notationNoterUserId
     * @return PozNotation
     */
    public function setNotationNoterUserId($notationNoterUserId)
    {
        $this->notationNoterUserId = $notationNoterUserId;

        return $this;
    }

    /**
     * Get notationNoterUserId
     *
     * @return integer 
     */
    public function getNotationNoterUserId()
    {
        return $this->notationNoterUserId;
    }

    /**
     * Set notationArtId
     *
     * @param integer $notationArtId
     * @return PozNotation
     */
    public function setNotationArtId($notationArtId)
    {
        $this->notationArtId = $notationArtId;

        return $this;
    }

    /**
     * Get notationArtId
     *
     * @return integer 
     */
    public function getNotationArtId()
    {
        return $this->notationArtId;
    }

    /**
     * Set notationTitle
     *
     * @param string $notationTitle
     * @return PozNotation
     */
    public function setNotationTitle($notationTitle)
    {
        $this->notationTitle = $notationTitle;

        return $this;
    }

    /**
     * Get notationTitle
     *
     * @return string 
     */
    public function getNotationTitle()
    {
        return $this->notationTitle;
    }

    /**
     * Set notationText
     *
     * @param string $notationText
     * @return PozNotation
     */
    public function setNotationText($notationText)
    {
        $this->notationText = $notationText;

        return $this;
    }

    /**
     * Get notationText
     *
     * @return string 
     */
    public function getNotationText()
    {
        return $this->notationText;
    }

    /**
     * Set notationNote
     *
     * @param integer $notationNote
     * @return PozNotation
     */
    public function setNotationNote($notationNote)
    {
        $this->notationNote = $notationNote;

        return $this;
    }

    /**
     * Get notationNote
     *
     * @return integer 
     */
    public function getNotationNote()
    {
        return $this->notationNote;
    }
}
