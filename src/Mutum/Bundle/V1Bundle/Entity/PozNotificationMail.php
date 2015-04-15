<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozNotificationMail
 *
 * @ORM\Table(name="poz_notification_mail")
 * @ORM\Entity
 */
class PozNotificationMail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notifmail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notifmailId;

    /**
     * @var string
     *
     * @ORM\Column(name="notifmail_name", type="string", length=255, nullable=false)
     */
    private $notifmailName;

    /**
     * @var integer
     *
     * @ORM\Column(name="notifmail_cat", type="integer", nullable=false)
     */
    private $notifmailCat;



    /**
     * Get notifmailId
     *
     * @return integer 
     */
    public function getNotifmailId()
    {
        return $this->notifmailId;
    }

    /**
     * Set notifmailName
     *
     * @param string $notifmailName
     * @return PozNotificationMail
     */
    public function setNotifmailName($notifmailName)
    {
        $this->notifmailName = $notifmailName;

        return $this;
    }

    /**
     * Get notifmailName
     *
     * @return string 
     */
    public function getNotifmailName()
    {
        return $this->notifmailName;
    }

    /**
     * Set notifmailCat
     *
     * @param integer $notifmailCat
     * @return PozNotificationMail
     */
    public function setNotifmailCat($notifmailCat)
    {
        $this->notifmailCat = $notifmailCat;

        return $this;
    }

    /**
     * Get notifmailCat
     *
     * @return integer 
     */
    public function getNotifmailCat()
    {
        return $this->notifmailCat;
    }
}
