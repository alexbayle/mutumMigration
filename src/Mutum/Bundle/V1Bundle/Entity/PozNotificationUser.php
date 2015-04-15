<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozNotificationUser
 *
 * @ORM\Table(name="poz_notification_user")
 * @ORM\Entity
 */
class PozNotificationUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notifuser_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notifuserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="notifuser_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notifuserUserId;



    /**
     * Set notifuserId
     *
     * @param integer $notifuserId
     * @return PozNotificationUser
     */
    public function setNotifuserId($notifuserId)
    {
        $this->notifuserId = $notifuserId;

        return $this;
    }

    /**
     * Get notifuserId
     *
     * @return integer 
     */
    public function getNotifuserId()
    {
        return $this->notifuserId;
    }

    /**
     * Set notifuserUserId
     *
     * @param integer $notifuserUserId
     * @return PozNotificationUser
     */
    public function setNotifuserUserId($notifuserUserId)
    {
        $this->notifuserUserId = $notifuserUserId;

        return $this;
    }

    /**
     * Get notifuserUserId
     *
     * @return integer 
     */
    public function getNotifuserUserId()
    {
        return $this->notifuserUserId;
    }
}
