<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 *
 * @ORM\Table(name="notation", indexes={@ORM\Index(name="nota_user_id", columns={"nota_user_id"}), @ORM\Index(name="nota_noter_user_id", columns={"nota_dest_user_id"}), @ORM\Index(name="nota_prod_id", columns={"nota_prod_id"})})
 * @ORM\Entity
 */
class Notation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nota_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota_user_id", type="integer", nullable=false)
     */
    private $notaUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota_dest_user_id", type="integer", nullable=false)
     */
    private $notaDestUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota_prod_id", type="integer", nullable=false)
     */
    private $notaProdId;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_type", type="string", length=1, nullable=false)
     */
    private $notaType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nota_date_creation", type="datetime", nullable=false)
     */
    private $notaDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_title", type="string", length=255, nullable=false)
     */
    private $notaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_message", type="text", nullable=false)
     */
    private $notaMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota_note", type="integer", nullable=false)
     */
    private $notaNote;



    /**
     * Get notaId
     *
     * @return integer 
     */
    public function getNotaId()
    {
        return $this->notaId;
    }

    /**
     * Set notaUserId
     *
     * @param integer $notaUserId
     * @return Notation
     */
    public function setNotaUserId($notaUserId)
    {
        $this->notaUserId = $notaUserId;

        return $this;
    }

    /**
     * Get notaUserId
     *
     * @return integer 
     */
    public function getNotaUserId()
    {
        return $this->notaUserId;
    }

    /**
     * Set notaDestUserId
     *
     * @param integer $notaDestUserId
     * @return Notation
     */
    public function setNotaDestUserId($notaDestUserId)
    {
        $this->notaDestUserId = $notaDestUserId;

        return $this;
    }

    /**
     * Get notaDestUserId
     *
     * @return integer 
     */
    public function getNotaDestUserId()
    {
        return $this->notaDestUserId;
    }

    /**
     * Set notaProdId
     *
     * @param integer $notaProdId
     * @return Notation
     */
    public function setNotaProdId($notaProdId)
    {
        $this->notaProdId = $notaProdId;

        return $this;
    }

    /**
     * Get notaProdId
     *
     * @return integer 
     */
    public function getNotaProdId()
    {
        return $this->notaProdId;
    }

    /**
     * Set notaType
     *
     * @param string $notaType
     * @return Notation
     */
    public function setNotaType($notaType)
    {
        $this->notaType = $notaType;

        return $this;
    }

    /**
     * Get notaType
     *
     * @return string 
     */
    public function getNotaType()
    {
        return $this->notaType;
    }

    /**
     * Set notaDateCreation
     *
     * @param \DateTime $notaDateCreation
     * @return Notation
     */
    public function setNotaDateCreation($notaDateCreation)
    {
        $this->notaDateCreation = $notaDateCreation;

        return $this;
    }

    /**
     * Get notaDateCreation
     *
     * @return \DateTime 
     */
    public function getNotaDateCreation()
    {
        return $this->notaDateCreation;
    }

    /**
     * Set notaTitle
     *
     * @param string $notaTitle
     * @return Notation
     */
    public function setNotaTitle($notaTitle)
    {
        $this->notaTitle = $notaTitle;

        return $this;
    }

    /**
     * Get notaTitle
     *
     * @return string 
     */
    public function getNotaTitle()
    {
        return $this->notaTitle;
    }

    /**
     * Set notaMessage
     *
     * @param string $notaMessage
     * @return Notation
     */
    public function setNotaMessage($notaMessage)
    {
        $this->notaMessage = $notaMessage;

        return $this;
    }

    /**
     * Get notaMessage
     *
     * @return string 
     */
    public function getNotaMessage()
    {
        return $this->notaMessage;
    }

    /**
     * Set notaNote
     *
     * @param integer $notaNote
     * @return Notation
     */
    public function setNotaNote($notaNote)
    {
        $this->notaNote = $notaNote;

        return $this;
    }

    /**
     * Get notaNote
     *
     * @return integer 
     */
    public function getNotaNote()
    {
        return $this->notaNote;
    }
}
