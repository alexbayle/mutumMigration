<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speakers
 *
 * @ORM\Table(name="speakers", indexes={@ORM\Index(name="spea_user_id", columns={"spea_user_id"})})
 * @ORM\Entity
 */
class Speakers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Discussion", inversedBy="speakers", cascade={"persist"})
     * @ORM\JoinColumn(name="spea_disc_id", referencedColumnName="disc_id")
     */
    private $discussion;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="speakers")
     * @ORM\JoinColumn(name="spea_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spea_admin", type="boolean", nullable=false)
     */
    private $speaAdmin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spea_seen", type="datetime", nullable=false)
     */
    private $speaSeen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spea_archived", type="boolean", nullable=false)
     */
    private $speaArchived;




    /**
     * Get speaDiscId
     *
     * @return integer 
     */
    public function getSpeaDiscId()
    {
        return $this->speaDiscId;
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
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }


    /**
     * Set speaAdmin
     *
     * @param boolean $speaAdmin
     * @return Speakers
     */
    public function setSpeaAdmin($speaAdmin)
    {
        $this->speaAdmin = $speaAdmin;

        return $this;
    }

    /**
     * Get speaAdmin
     *
     * @return boolean 
     */
    public function getSpeaAdmin()
    {
        return $this->speaAdmin;
    }

    /**
     * Set speaSeen
     *
     * @param \DateTime $speaSeen
     * @return Speakers
     */
    public function setSpeaSeen($speaSeen)
    {
        $this->speaSeen = $speaSeen;

        return $this;
    }

    /**
     * Get speaSeen
     *
     * @return \DateTime 
     */
    public function getSpeaSeen()
    {
        return $this->speaSeen;
    }

    /**
     * Set speaArchived
     *
     * @param boolean $speaArchived
     * @return Speakers
     */
    public function setSpeaArchived($speaArchived)
    {
        $this->speaArchived = $speaArchived;

        return $this;
    }

    /**
     * Get speaArchived
     *
     * @return boolean 
     */
    public function getSpeaArchived()
    {
        return $this->speaArchived;
    }
}
