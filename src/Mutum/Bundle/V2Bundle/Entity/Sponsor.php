<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sponsors")
     * @ORM\JoinColumn(name="spon_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="spon_email", type="string", length=255, nullable=false)
     */
    private $sponEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spon_date_creation", type="datetime", nullable=false)
     */
    private $sponDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="spon_unsubscribe_code", type="string", length=255, nullable=false)
     */
    private $sponUnsubscribeCode;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



    /**
     * Set sponEmail
     *
     * @param string $sponEmail
     * @return Sponsor
     */
    public function setSponEmail($sponEmail)
    {
        $this->sponEmail = $sponEmail;

        return $this;
    }

    /**
     * Get sponEmail
     *
     * @return string 
     */
    public function getSponEmail()
    {
        return $this->sponEmail;
    }

    /**
     * Set sponDateCreation
     *
     * @param \DateTime $sponDateCreation
     * @return Sponsor
     */
    public function setSponDateCreation($sponDateCreation)
    {
        $this->sponDateCreation = $sponDateCreation;

        return $this;
    }

    /**
     * Get sponDateCreation
     *
     * @return \DateTime 
     */
    public function getSponDateCreation()
    {
        return $this->sponDateCreation;
    }

    /**
     * Set sponUnsubscribeCode
     *
     * @param string $sponUnsubscribeCode
     * @return Sponsor
     */
    public function setSponUnsubscribeCode($sponUnsubscribeCode)
    {
        $this->sponUnsubscribeCode = $sponUnsubscribeCode;

        return $this;
    }

    /**
     * Get sponUnsubscribeCode
     *
     * @return string 
     */
    public function getSponUnsubscribeCode()
    {
        return $this->sponUnsubscribeCode;
    }


}
