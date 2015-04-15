<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozNotificationCat
 *
 * @ORM\Table(name="poz_notification_cat")
 * @ORM\Entity
 */
class PozNotificationCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notifcat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notifcatId;

    /**
     * @var string
     *
     * @ORM\Column(name="notifcat_name", type="string", length=255, nullable=false)
     */
    private $notifcatName;



    /**
     * Get notifcatId
     *
     * @return integer 
     */
    public function getNotifcatId()
    {
        return $this->notifcatId;
    }

    /**
     * Set notifcatName
     *
     * @param string $notifcatName
     * @return PozNotificationCat
     */
    public function setNotifcatName($notifcatName)
    {
        $this->notifcatName = $notifcatName;

        return $this;
    }

    /**
     * Get notifcatName
     *
     * @return string 
     */
    public function getNotifcatName()
    {
        return $this->notifcatName;
    }
}
