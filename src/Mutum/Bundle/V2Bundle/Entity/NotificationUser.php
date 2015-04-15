<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationUser
 *
 * @ORM\Table(name="notification_user", indexes={@ORM\Index(name="notu_notm_id", columns={"notu_notm_id"})})
 * @ORM\Entity
 */
class NotificationUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notu_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notuUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="notu_notm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notuNotmId;



    /**
     * Set notuUserId
     *
     * @param integer $notuUserId
     * @return NotificationUser
     */
    public function setNotuUserId($notuUserId)
    {
        $this->notuUserId = $notuUserId;

        return $this;
    }

    /**
     * Get notuUserId
     *
     * @return integer 
     */
    public function getNotuUserId()
    {
        return $this->notuUserId;
    }

    /**
     * Set notuNotmId
     *
     * @param integer $notuNotmId
     * @return NotificationUser
     */
    public function setNotuNotmId($notuNotmId)
    {
        $this->notuNotmId = $notuNotmId;

        return $this;
    }

    /**
     * Get notuNotmId
     *
     * @return integer 
     */
    public function getNotuNotmId()
    {
        return $this->notuNotmId;
    }
}
