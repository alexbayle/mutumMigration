<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity
 */
class Discussion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="disc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $discId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disc_all_grant_invit", type="boolean", nullable=false)
     */
    private $discAllGrantInvit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="disc_date_creation", type="datetime", nullable=false)
     */
    private $discDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="disc_name", type="string", length=255, nullable=false)
     */
    private $discName;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="discussion", cascade={"persist"})
     */
    private $messages;


    public function __construct()
    {
        $this->messages = new ArrayCollection();
    }

    /**
     * Get discId
     *
     * @return integer 
     */
    public function getDiscId()
    {
        return $this->discId;
    }

    /**
     * Set discAllGrantInvit
     *
     * @param boolean $discAllGrantInvit
     * @return Discussion
     */
    public function setDiscAllGrantInvit($discAllGrantInvit)
    {
        $this->discAllGrantInvit = $discAllGrantInvit;

        return $this;
    }

    /**
     * Get discAllGrantInvit
     *
     * @return boolean 
     */
    public function getDiscAllGrantInvit()
    {
        return $this->discAllGrantInvit;
    }

    /**
     * Set discDateCreation
     *
     * @param \DateTime $discDateCreation
     * @return Discussion
     */
    public function setDiscDateCreation($discDateCreation)
    {
        $this->discDateCreation = $discDateCreation;

        return $this;
    }

    /**
     * Get discDateCreation
     *
     * @return \DateTime 
     */
    public function getDiscDateCreation()
    {
        return $this->discDateCreation;
    }

    /**
     * Set discName
     *
     * @param string $discName
     * @return Discussion
     */
    public function setDiscName($discName)
    {
        $this->discName = $discName;

        return $this;
    }

    /**
     * Get discName
     *
     * @return string 
     */
    public function getDiscName()
    {
        return $this->discName;
    }

    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->messages = new ArrayCollection;
        foreach ($messages as $message)
        {
            $this->addMessage($message);
        }
    }

    public function addMessage(Message $message)
    {
        $this->messages[] = $message;
    }

    public function removeMessage(Message $message)
    {
        $this->messages->removeElement($message);
    }


}
