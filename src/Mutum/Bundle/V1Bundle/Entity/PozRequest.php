<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozRequest
 *
 * @ORM\Table(name="poz_request")
 * @ORM\Entity
 */
class PozRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="req_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reqId;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_user_id", type="integer", nullable=false)
     */
    private $reqUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_art_user_id", type="integer", nullable=false)
     */
    private $reqArtUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_art_id", type="integer", nullable=false)
     */
    private $reqArtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="req_datetime", type="datetime", nullable=false)
     */
    private $reqDatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="req_date_from", type="date", nullable=false)
     */
    private $reqDateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="req_date_to", type="date", nullable=false)
     */
    private $reqDateTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="req_date_next", type="date", nullable=true)
     */
    private $reqDateNext;

    /**
     * @var string
     *
     * @ORM\Column(name="req_message_next", type="text", nullable=false)
     */
    private $reqMessageNext;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_pts_next", type="integer", nullable=false)
     */
    private $reqPtsNext;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_pts", type="integer", nullable=false)
     */
    private $reqPts;

    /**
     * @var string
     *
     * @ORM\Column(name="req_message", type="text", nullable=false)
     */
    private $reqMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="req_code", type="string", length=6, nullable=false)
     */
    private $reqCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_caution", type="integer", nullable=false)
     */
    private $reqCaution;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_card_id", type="integer", nullable=false)
     */
    private $reqCardId;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_caution_ask", type="integer", nullable=false)
     */
    private $reqCautionAsk;

    /**
     * @var string
     *
     * @ORM\Column(name="req_caution_motif", type="string", length=255, nullable=false)
     */
    private $reqCautionMotif;

    /**
     * @var string
     *
     * @ORM\Column(name="req_caution_message", type="text", nullable=false)
     */
    private $reqCautionMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="req_caution_ask_date", type="date", nullable=false)
     */
    private $reqCautionAskDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_caution_bank_refund", type="integer", nullable=false)
     */
    private $reqCautionBankRefund;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_caution_seen", type="integer", nullable=false)
     */
    private $reqCautionSeen;

    /**
     * @var string
     *
     * @ORM\Column(name="req_caution_refuse_message", type="text", nullable=false)
     */
    private $reqCautionRefuseMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_caution_reported", type="integer", nullable=false)
     */
    private $reqCautionReported;

    /**
     * @var string
     *
     * @ORM\Column(name="req_status", type="string", length=1, nullable=false)
     */
    private $reqStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_preteur_note", type="integer", nullable=false)
     */
    private $reqPreteurNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_emprunteur_note", type="integer", nullable=false)
     */
    private $reqEmprunteurNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_art_note", type="integer", nullable=false)
     */
    private $reqArtNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_preteur_archive", type="integer", nullable=false)
     */
    private $reqPreteurArchive;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_emprunteur_archive", type="integer", nullable=false)
     */
    private $reqEmprunteurArchive;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_emprunteur_read", type="integer", nullable=false)
     */
    private $reqEmprunteurRead;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_preteur_read", type="integer", nullable=false)
     */
    private $reqPreteurRead;



    /**
     * Get reqId
     *
     * @return integer 
     */
    public function getReqId()
    {
        return $this->reqId;
    }

    /**
     * Set reqUserId
     *
     * @param integer $reqUserId
     * @return PozRequest
     */
    public function setReqUserId($reqUserId)
    {
        $this->reqUserId = $reqUserId;

        return $this;
    }

    /**
     * Get reqUserId
     *
     * @return integer 
     */
    public function getReqUserId()
    {
        return $this->reqUserId;
    }

    /**
     * Set reqArtUserId
     *
     * @param integer $reqArtUserId
     * @return PozRequest
     */
    public function setReqArtUserId($reqArtUserId)
    {
        $this->reqArtUserId = $reqArtUserId;

        return $this;
    }

    /**
     * Get reqArtUserId
     *
     * @return integer 
     */
    public function getReqArtUserId()
    {
        return $this->reqArtUserId;
    }

    /**
     * Set reqArtId
     *
     * @param integer $reqArtId
     * @return PozRequest
     */
    public function setReqArtId($reqArtId)
    {
        $this->reqArtId = $reqArtId;

        return $this;
    }

    /**
     * Get reqArtId
     *
     * @return integer 
     */
    public function getReqArtId()
    {
        return $this->reqArtId;
    }

    /**
     * Set reqDatetime
     *
     * @param \DateTime $reqDatetime
     * @return PozRequest
     */
    public function setReqDatetime($reqDatetime)
    {
        $this->reqDatetime = $reqDatetime;

        return $this;
    }

    /**
     * Get reqDatetime
     *
     * @return \DateTime 
     */
    public function getReqDatetime()
    {
        return $this->reqDatetime;
    }

    /**
     * Set reqDateFrom
     *
     * @param \DateTime $reqDateFrom
     * @return PozRequest
     */
    public function setReqDateFrom($reqDateFrom)
    {
        $this->reqDateFrom = $reqDateFrom;

        return $this;
    }

    /**
     * Get reqDateFrom
     *
     * @return \DateTime 
     */
    public function getReqDateFrom()
    {
        return $this->reqDateFrom;
    }

    /**
     * Set reqDateTo
     *
     * @param \DateTime $reqDateTo
     * @return PozRequest
     */
    public function setReqDateTo($reqDateTo)
    {
        $this->reqDateTo = $reqDateTo;

        return $this;
    }

    /**
     * Get reqDateTo
     *
     * @return \DateTime 
     */
    public function getReqDateTo()
    {
        return $this->reqDateTo;
    }

    /**
     * Set reqDateNext
     *
     * @param \DateTime $reqDateNext
     * @return PozRequest
     */
    public function setReqDateNext($reqDateNext)
    {
        $this->reqDateNext = $reqDateNext;

        return $this;
    }

    /**
     * Get reqDateNext
     *
     * @return \DateTime 
     */
    public function getReqDateNext()
    {
        return $this->reqDateNext;
    }

    /**
     * Set reqMessageNext
     *
     * @param string $reqMessageNext
     * @return PozRequest
     */
    public function setReqMessageNext($reqMessageNext)
    {
        $this->reqMessageNext = $reqMessageNext;

        return $this;
    }

    /**
     * Get reqMessageNext
     *
     * @return string 
     */
    public function getReqMessageNext()
    {
        return $this->reqMessageNext;
    }

    /**
     * Set reqPtsNext
     *
     * @param integer $reqPtsNext
     * @return PozRequest
     */
    public function setReqPtsNext($reqPtsNext)
    {
        $this->reqPtsNext = $reqPtsNext;

        return $this;
    }

    /**
     * Get reqPtsNext
     *
     * @return integer 
     */
    public function getReqPtsNext()
    {
        return $this->reqPtsNext;
    }

    /**
     * Set reqPts
     *
     * @param integer $reqPts
     * @return PozRequest
     */
    public function setReqPts($reqPts)
    {
        $this->reqPts = $reqPts;

        return $this;
    }

    /**
     * Get reqPts
     *
     * @return integer 
     */
    public function getReqPts()
    {
        return $this->reqPts;
    }

    /**
     * Set reqMessage
     *
     * @param string $reqMessage
     * @return PozRequest
     */
    public function setReqMessage($reqMessage)
    {
        $this->reqMessage = $reqMessage;

        return $this;
    }

    /**
     * Get reqMessage
     *
     * @return string 
     */
    public function getReqMessage()
    {
        return $this->reqMessage;
    }

    /**
     * Set reqCode
     *
     * @param string $reqCode
     * @return PozRequest
     */
    public function setReqCode($reqCode)
    {
        $this->reqCode = $reqCode;

        return $this;
    }

    /**
     * Get reqCode
     *
     * @return string 
     */
    public function getReqCode()
    {
        return $this->reqCode;
    }

    /**
     * Set reqCaution
     *
     * @param integer $reqCaution
     * @return PozRequest
     */
    public function setReqCaution($reqCaution)
    {
        $this->reqCaution = $reqCaution;

        return $this;
    }

    /**
     * Get reqCaution
     *
     * @return integer 
     */
    public function getReqCaution()
    {
        return $this->reqCaution;
    }

    /**
     * Set reqCardId
     *
     * @param integer $reqCardId
     * @return PozRequest
     */
    public function setReqCardId($reqCardId)
    {
        $this->reqCardId = $reqCardId;

        return $this;
    }

    /**
     * Get reqCardId
     *
     * @return integer 
     */
    public function getReqCardId()
    {
        return $this->reqCardId;
    }

    /**
     * Set reqCautionAsk
     *
     * @param integer $reqCautionAsk
     * @return PozRequest
     */
    public function setReqCautionAsk($reqCautionAsk)
    {
        $this->reqCautionAsk = $reqCautionAsk;

        return $this;
    }

    /**
     * Get reqCautionAsk
     *
     * @return integer 
     */
    public function getReqCautionAsk()
    {
        return $this->reqCautionAsk;
    }

    /**
     * Set reqCautionMotif
     *
     * @param string $reqCautionMotif
     * @return PozRequest
     */
    public function setReqCautionMotif($reqCautionMotif)
    {
        $this->reqCautionMotif = $reqCautionMotif;

        return $this;
    }

    /**
     * Get reqCautionMotif
     *
     * @return string 
     */
    public function getReqCautionMotif()
    {
        return $this->reqCautionMotif;
    }

    /**
     * Set reqCautionMessage
     *
     * @param string $reqCautionMessage
     * @return PozRequest
     */
    public function setReqCautionMessage($reqCautionMessage)
    {
        $this->reqCautionMessage = $reqCautionMessage;

        return $this;
    }

    /**
     * Get reqCautionMessage
     *
     * @return string 
     */
    public function getReqCautionMessage()
    {
        return $this->reqCautionMessage;
    }

    /**
     * Set reqCautionAskDate
     *
     * @param \DateTime $reqCautionAskDate
     * @return PozRequest
     */
    public function setReqCautionAskDate($reqCautionAskDate)
    {
        $this->reqCautionAskDate = $reqCautionAskDate;

        return $this;
    }

    /**
     * Get reqCautionAskDate
     *
     * @return \DateTime 
     */
    public function getReqCautionAskDate()
    {
        return $this->reqCautionAskDate;
    }

    /**
     * Set reqCautionBankRefund
     *
     * @param integer $reqCautionBankRefund
     * @return PozRequest
     */
    public function setReqCautionBankRefund($reqCautionBankRefund)
    {
        $this->reqCautionBankRefund = $reqCautionBankRefund;

        return $this;
    }

    /**
     * Get reqCautionBankRefund
     *
     * @return integer 
     */
    public function getReqCautionBankRefund()
    {
        return $this->reqCautionBankRefund;
    }

    /**
     * Set reqCautionSeen
     *
     * @param integer $reqCautionSeen
     * @return PozRequest
     */
    public function setReqCautionSeen($reqCautionSeen)
    {
        $this->reqCautionSeen = $reqCautionSeen;

        return $this;
    }

    /**
     * Get reqCautionSeen
     *
     * @return integer 
     */
    public function getReqCautionSeen()
    {
        return $this->reqCautionSeen;
    }

    /**
     * Set reqCautionRefuseMessage
     *
     * @param string $reqCautionRefuseMessage
     * @return PozRequest
     */
    public function setReqCautionRefuseMessage($reqCautionRefuseMessage)
    {
        $this->reqCautionRefuseMessage = $reqCautionRefuseMessage;

        return $this;
    }

    /**
     * Get reqCautionRefuseMessage
     *
     * @return string 
     */
    public function getReqCautionRefuseMessage()
    {
        return $this->reqCautionRefuseMessage;
    }

    /**
     * Set reqCautionReported
     *
     * @param integer $reqCautionReported
     * @return PozRequest
     */
    public function setReqCautionReported($reqCautionReported)
    {
        $this->reqCautionReported = $reqCautionReported;

        return $this;
    }

    /**
     * Get reqCautionReported
     *
     * @return integer 
     */
    public function getReqCautionReported()
    {
        return $this->reqCautionReported;
    }

    /**
     * Set reqStatus
     *
     * @param string $reqStatus
     * @return PozRequest
     */
    public function setReqStatus($reqStatus)
    {
        $this->reqStatus = $reqStatus;

        return $this;
    }

    /**
     * Get reqStatus
     *
     * @return string 
     */
    public function getReqStatus()
    {
        return $this->reqStatus;
    }

    /**
     * Set reqPreteurNote
     *
     * @param integer $reqPreteurNote
     * @return PozRequest
     */
    public function setReqPreteurNote($reqPreteurNote)
    {
        $this->reqPreteurNote = $reqPreteurNote;

        return $this;
    }

    /**
     * Get reqPreteurNote
     *
     * @return integer 
     */
    public function getReqPreteurNote()
    {
        return $this->reqPreteurNote;
    }

    /**
     * Set reqEmprunteurNote
     *
     * @param integer $reqEmprunteurNote
     * @return PozRequest
     */
    public function setReqEmprunteurNote($reqEmprunteurNote)
    {
        $this->reqEmprunteurNote = $reqEmprunteurNote;

        return $this;
    }

    /**
     * Get reqEmprunteurNote
     *
     * @return integer 
     */
    public function getReqEmprunteurNote()
    {
        return $this->reqEmprunteurNote;
    }

    /**
     * Set reqArtNote
     *
     * @param integer $reqArtNote
     * @return PozRequest
     */
    public function setReqArtNote($reqArtNote)
    {
        $this->reqArtNote = $reqArtNote;

        return $this;
    }

    /**
     * Get reqArtNote
     *
     * @return integer 
     */
    public function getReqArtNote()
    {
        return $this->reqArtNote;
    }

    /**
     * Set reqPreteurArchive
     *
     * @param integer $reqPreteurArchive
     * @return PozRequest
     */
    public function setReqPreteurArchive($reqPreteurArchive)
    {
        $this->reqPreteurArchive = $reqPreteurArchive;

        return $this;
    }

    /**
     * Get reqPreteurArchive
     *
     * @return integer 
     */
    public function getReqPreteurArchive()
    {
        return $this->reqPreteurArchive;
    }

    /**
     * Set reqEmprunteurArchive
     *
     * @param integer $reqEmprunteurArchive
     * @return PozRequest
     */
    public function setReqEmprunteurArchive($reqEmprunteurArchive)
    {
        $this->reqEmprunteurArchive = $reqEmprunteurArchive;

        return $this;
    }

    /**
     * Get reqEmprunteurArchive
     *
     * @return integer 
     */
    public function getReqEmprunteurArchive()
    {
        return $this->reqEmprunteurArchive;
    }

    /**
     * Set reqEmprunteurRead
     *
     * @param integer $reqEmprunteurRead
     * @return PozRequest
     */
    public function setReqEmprunteurRead($reqEmprunteurRead)
    {
        $this->reqEmprunteurRead = $reqEmprunteurRead;

        return $this;
    }

    /**
     * Get reqEmprunteurRead
     *
     * @return integer 
     */
    public function getReqEmprunteurRead()
    {
        return $this->reqEmprunteurRead;
    }

    /**
     * Set reqPreteurRead
     *
     * @param integer $reqPreteurRead
     * @return PozRequest
     */
    public function setReqPreteurRead($reqPreteurRead)
    {
        $this->reqPreteurRead = $reqPreteurRead;

        return $this;
    }

    /**
     * Get reqPreteurRead
     *
     * @return integer 
     */
    public function getReqPreteurRead()
    {
        return $this->reqPreteurRead;
    }
}
