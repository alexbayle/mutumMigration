<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozSponsor
 *
 * @ORM\Table(name="poz_sponsor")
 * @ORM\Entity
 */
class PozSponsor
{
    /**
     * @var string
     *
     * @ORM\Column(name="sponsor_email", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sponsorEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="sponsor_user_id", type="integer", nullable=false)
     */
    private $sponsorUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sponsor_added", type="datetime", nullable=false)
     */
    private $sponsorAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="sponsor_unsubscribe_code", type="string", length=16, nullable=false)
     */
    private $sponsorUnsubscribeCode;



    /**
     * Get sponsorEmail
     *
     * @return string 
     */
    public function getSponsorEmail()
    {
        return $this->sponsorEmail;
    }

    /**
     * Set sponsorUserId
     *
     * @param integer $sponsorUserId
     * @return PozSponsor
     */
    public function setSponsorUserId($sponsorUserId)
    {
        $this->sponsorUserId = $sponsorUserId;

        return $this;
    }

    /**
     * Get sponsorUserId
     *
     * @return integer 
     */
    public function getSponsorUserId()
    {
        return $this->sponsorUserId;
    }

    /**
     * Set sponsorAdded
     *
     * @param \DateTime $sponsorAdded
     * @return PozSponsor
     */
    public function setSponsorAdded($sponsorAdded)
    {
        $this->sponsorAdded = $sponsorAdded;

        return $this;
    }

    /**
     * Get sponsorAdded
     *
     * @return \DateTime 
     */
    public function getSponsorAdded()
    {
        return $this->sponsorAdded;
    }

    /**
     * Set sponsorUnsubscribeCode
     *
     * @param string $sponsorUnsubscribeCode
     * @return PozSponsor
     */
    public function setSponsorUnsubscribeCode($sponsorUnsubscribeCode)
    {
        $this->sponsorUnsubscribeCode = $sponsorUnsubscribeCode;

        return $this;
    }

    /**
     * Get sponsorUnsubscribeCode
     *
     * @return string 
     */
    public function getSponsorUnsubscribeCode()
    {
        return $this->sponsorUnsubscribeCode;
    }
}
