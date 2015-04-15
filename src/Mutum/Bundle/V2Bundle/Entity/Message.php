<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="mess_disc_id", columns={"mess_disc_id"}), @ORM\Index(name="mess_user_id", columns={"mess_user_id"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mess_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $messId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(name="mess_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="mess_text", type="text", nullable=false)
     */
    private $messText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mess_date_creation", type="datetime", nullable=false)
     */
    private $messDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="mess_class", type="string", length=255, nullable=false)
     */
    private $messClass;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Discussion", inversedBy="messages", cascade={"persist"})
     * @ORM\JoinColumn(name="mess_disc_id", referencedColumnName="disc_id")
     */
    private $discussion;


    /**
     * Get messId
     *
     * @return integer
     */
    public function getMessId()
    {
        return $this->messId;
    }


    /**
     * Set messText
     *
     * @param string $messText
     * @return Message
     */
    public function setMessText($messText)
    {
        $this->messText = $messText;

        return $this;
    }

    /**
     * Get messText
     *
     * @return string
     */
    public function getMessText()
    {
        return $this->messText;
    }

    /**
     * Set messDateCreation
     *
     * @param \DateTime $messDateCreation
     * @return Message
     */
    public function setMessDateCreation($messDateCreation)
    {
        $this->messDateCreation = $messDateCreation;

        return $this;
    }

    /**
     * Get messDateCreation
     *
     * @return \DateTime
     */
    public function getMessDateCreation()
    {
        return $this->messDateCreation;
    }

    /**
     * Set messClass
     *
     * @param string $messClass
     * @return Message
     */
    public function setMessClass($messClass)
    {
        $this->messClass = $messClass;

        return $this;
    }

    /**
     * Get messClass
     *
     * @return string
     */
    public function getMessClass()
    {
        return $this->messClass;
    }

    /**
     * @return int
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

    /**
     * @param int $discussion
     */
    public function setDiscussion(Discussion $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

}
