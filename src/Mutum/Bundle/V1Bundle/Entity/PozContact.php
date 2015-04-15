<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozContact
 *
 * @ORM\Table(name="poz_contact", indexes={@ORM\Index(name="contact_user_id", columns={"contact_user_id"}), @ORM\Index(name="contact_dest_user_id", columns={"contact_dest_user_id"})})
 * @ORM\Entity
 */
class PozContact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_user_id", type="integer", nullable=false)
     */
    private $contactUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_dest_user_id", type="integer", nullable=false)
     */
    private $contactDestUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contact_date_creation", type="datetime", nullable=false)
     */
    private $contactDateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contact_date_accept", type="datetime", nullable=false)
     */
    private $contactDateAccept;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_status", type="string", length=1, nullable=false)
     */
    private $contactStatus;



    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contactUserId
     *
     * @param integer $contactUserId
     * @return PozContact
     */
    public function setContactUserId($contactUserId)
    {
        $this->contactUserId = $contactUserId;

        return $this;
    }

    /**
     * Get contactUserId
     *
     * @return integer 
     */
    public function getContactUserId()
    {
        return $this->contactUserId;
    }

    /**
     * Set contactDestUserId
     *
     * @param integer $contactDestUserId
     * @return PozContact
     */
    public function setContactDestUserId($contactDestUserId)
    {
        $this->contactDestUserId = $contactDestUserId;

        return $this;
    }

    /**
     * Get contactDestUserId
     *
     * @return integer 
     */
    public function getContactDestUserId()
    {
        return $this->contactDestUserId;
    }

    /**
     * Set contactDateCreation
     *
     * @param \DateTime $contactDateCreation
     * @return PozContact
     */
    public function setContactDateCreation($contactDateCreation)
    {
        $this->contactDateCreation = $contactDateCreation;

        return $this;
    }

    /**
     * Get contactDateCreation
     *
     * @return \DateTime 
     */
    public function getContactDateCreation()
    {
        return $this->contactDateCreation;
    }

    /**
     * Set contactDateAccept
     *
     * @param \DateTime $contactDateAccept
     * @return PozContact
     */
    public function setContactDateAccept($contactDateAccept)
    {
        $this->contactDateAccept = $contactDateAccept;

        return $this;
    }

    /**
     * Get contactDateAccept
     *
     * @return \DateTime 
     */
    public function getContactDateAccept()
    {
        return $this->contactDateAccept;
    }

    /**
     * Set contactStatus
     *
     * @param string $contactStatus
     * @return PozContact
     */
    public function setContactStatus($contactStatus)
    {
        $this->contactStatus = $contactStatus;

        return $this;
    }

    /**
     * Get contactStatus
     *
     * @return string 
     */
    public function getContactStatus()
    {
        return $this->contactStatus;
    }
}
