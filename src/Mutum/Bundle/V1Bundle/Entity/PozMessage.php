<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozMessage
 *
 * @ORM\Table(name="poz_message", indexes={@ORM\Index(name="entry_message_msg_user_id", columns={"msg_user_id"}), @ORM\Index(name="entry_message_msg_dest_user_id", columns={"msg_dest_user_id"})})
 * @ORM\Entity
 */
class PozMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_user_id", type="integer", nullable=false)
     */
    private $msgUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_dest_user_id", type="integer", nullable=false)
     */
    private $msgDestUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_art_id", type="integer", nullable=false)
     */
    private $msgArtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="msg_datetime", type="datetime", nullable=false)
     */
    private $msgDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_text", type="text", nullable=false)
     */
    private $msgText;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_read_from", type="string", length=1, nullable=false)
     */
    private $msgReadFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_read_dest", type="string", length=1, nullable=false)
     */
    private $msgReadDest;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_deleted_from", type="string", length=1, nullable=false)
     */
    private $msgDeletedFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_deleted_dest", type="string", length=1, nullable=false)
     */
    private $msgDeletedDest;



    /**
     * Get msgId
     *
     * @return integer 
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Set msgUserId
     *
     * @param integer $msgUserId
     * @return PozMessage
     */
    public function setMsgUserId($msgUserId)
    {
        $this->msgUserId = $msgUserId;

        return $this;
    }

    /**
     * Get msgUserId
     *
     * @return integer 
     */
    public function getMsgUserId()
    {
        return $this->msgUserId;
    }

    /**
     * Set msgDestUserId
     *
     * @param integer $msgDestUserId
     * @return PozMessage
     */
    public function setMsgDestUserId($msgDestUserId)
    {
        $this->msgDestUserId = $msgDestUserId;

        return $this;
    }

    /**
     * Get msgDestUserId
     *
     * @return integer 
     */
    public function getMsgDestUserId()
    {
        return $this->msgDestUserId;
    }

    /**
     * Set msgArtId
     *
     * @param integer $msgArtId
     * @return PozMessage
     */
    public function setMsgArtId($msgArtId)
    {
        $this->msgArtId = $msgArtId;

        return $this;
    }

    /**
     * Get msgArtId
     *
     * @return integer 
     */
    public function getMsgArtId()
    {
        return $this->msgArtId;
    }

    /**
     * Set msgDatetime
     *
     * @param \DateTime $msgDatetime
     * @return PozMessage
     */
    public function setMsgDatetime($msgDatetime)
    {
        $this->msgDatetime = $msgDatetime;

        return $this;
    }

    /**
     * Get msgDatetime
     *
     * @return \DateTime 
     */
    public function getMsgDatetime()
    {
        return $this->msgDatetime;
    }

    /**
     * Set msgText
     *
     * @param string $msgText
     * @return PozMessage
     */
    public function setMsgText($msgText)
    {
        $this->msgText = $msgText;

        return $this;
    }

    /**
     * Get msgText
     *
     * @return string 
     */
    public function getMsgText()
    {
        return $this->msgText;
    }

    /**
     * Set msgReadFrom
     *
     * @param string $msgReadFrom
     * @return PozMessage
     */
    public function setMsgReadFrom($msgReadFrom)
    {
        $this->msgReadFrom = $msgReadFrom;

        return $this;
    }

    /**
     * Get msgReadFrom
     *
     * @return string 
     */
    public function getMsgReadFrom()
    {
        return $this->msgReadFrom;
    }

    /**
     * Set msgReadDest
     *
     * @param string $msgReadDest
     * @return PozMessage
     */
    public function setMsgReadDest($msgReadDest)
    {
        $this->msgReadDest = $msgReadDest;

        return $this;
    }

    /**
     * Get msgReadDest
     *
     * @return string 
     */
    public function getMsgReadDest()
    {
        return $this->msgReadDest;
    }

    /**
     * Set msgDeletedFrom
     *
     * @param string $msgDeletedFrom
     * @return PozMessage
     */
    public function setMsgDeletedFrom($msgDeletedFrom)
    {
        $this->msgDeletedFrom = $msgDeletedFrom;

        return $this;
    }

    /**
     * Get msgDeletedFrom
     *
     * @return string 
     */
    public function getMsgDeletedFrom()
    {
        return $this->msgDeletedFrom;
    }

    /**
     * Set msgDeletedDest
     *
     * @param string $msgDeletedDest
     * @return PozMessage
     */
    public function setMsgDeletedDest($msgDeletedDest)
    {
        $this->msgDeletedDest = $msgDeletedDest;

        return $this;
    }

    /**
     * Get msgDeletedDest
     *
     * @return string 
     */
    public function getMsgDeletedDest()
    {
        return $this->msgDeletedDest;
    }
}
