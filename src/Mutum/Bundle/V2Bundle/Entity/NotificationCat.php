<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationCat
 *
 * @ORM\Table(name="notification_cat")
 * @ORM\Entity
 */
class NotificationCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notcId;

    /**
     * @var string
     *
     * @ORM\Column(name="notc_name", type="string", length=255, nullable=false)
     */
    private $notcName;

    /**
     * @ORM\OneToMany(targetEntity="NotificationMail", mappedBy="category")
     *
     */
    private $mails;

    public function __construct()
    {
        $this->mails = new ArrayCollection();
    }

    public function setNotcId($id)
    {
        $this->notcId = $id;
    }


    /**
     * Get notcId
     *
     * @return integer
     */
    public function getNotcId()
    {
        return $this->notcId;
    }

    /**
     * Set notcName
     *
     * @param string $notcName
     * @return NotificationCat
     */
    public function setNotcName($notcName)
    {
        $this->notcName = $notcName;

        return $this;
    }

    /**
     * Get notcName
     *
     * @return string
     */
    public function getNotcName()
    {
        return $this->notcName;
    }

    /**
     * @return mixed
     */
    public function getMails()
    {
        return $this->mails;
    }

    /**
     * @param mixed $mails
     */
    public function setMails($mails)
    {
        $this->mails = new ArrayCollection();
        foreach ($mails as $mail) {
            $this->addMail($mail);
        }
    }

    public function addMail(NotificationMail $mail)
    {
        $mail->setCategory($this);
        $this->mails[] = $mail;
    }

    public function removeMail(NotificationMail $mail)
    {
        $this->mails->removeElement($mail);
    }

}
