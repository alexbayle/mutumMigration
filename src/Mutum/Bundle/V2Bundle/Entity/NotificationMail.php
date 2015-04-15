<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationMail
 *
 * @ORM\Table(name="notification_mail", indexes={@ORM\Index(name="notc_id", columns={"notm_notc_id"})})
 * @ORM\Entity
 */
class NotificationMail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notmId;

    /**
     * @var string
     *
     * @ORM\Column(name="notm_name", type="string", length=255, nullable=false)
     */
    private $notmName;

    /**
     * @var string
     *
     * @ORM\Column(name="notm_short", type="string", length=255, nullable=false)
     */
    private $notmShort;

    /**
     * @var integer
     *
     * @ORM\Column(name="notm_notc_id", type="integer", nullable=false)
     */
    private $notmNotcId;

    /**
     * @ORM\ManyToOne(targetEntity="NotificationCat", inversedBy="mails")
     * @ORM\JoinColumn(name="notm_notc_id", referencedColumnName="notc_id")
     */
    private $category;


    public function setNotmId($id)
    {
        $this->notmId = $id;
    }

    /**
     * Get notmId
     *
     * @return integer 
     */
    public function getNotmId()
    {
        return $this->notmId;
    }

    /**
     * Set notmName
     *
     * @param string $notmName
     * @return NotificationMail
     */
    public function setNotmName($notmName)
    {
        $this->notmName = $notmName;

        return $this;
    }

    /**
     * Get notmName
     *
     * @return string 
     */
    public function getNotmName()
    {
        return $this->notmName;
    }

    /**
     * Set notmShort
     *
     * @param string $notmShort
     * @return NotificationMail
     */
    public function setNotmShort($notmShort)
    {
        $this->notmShort = $notmShort;

        return $this;
    }

    /**
     * Get notmShort
     *
     * @return string 
     */
    public function getNotmShort()
    {
        return $this->notmShort;
    }

    /**
     * Set notmNotcId
     *
     * @param integer $notmNotcId
     * @return NotificationMail
     */
    public function setNotmNotcId($notmNotcId)
    {
        $this->notmNotcId = $notmNotcId;

        return $this;
    }

    /**
     * Get notmNotcId
     *
     * @return integer 
     */
    public function getNotmNotcId()
    {
        return $this->notmNotcId;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory(NotificationCat $category)
    {
        $category->setMails($this);
        $this->category = $category;
    }


}
