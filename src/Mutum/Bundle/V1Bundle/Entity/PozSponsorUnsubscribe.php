<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozSponsorUnsubscribe
 *
 * @ORM\Table(name="poz_sponsor_unsubscribe")
 * @ORM\Entity
 */
class PozSponsorUnsubscribe
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
     * @var string
     *
     * @ORM\Column(name="unsub_mail", type="string", length=255, nullable=false)
     */
    private $unsubMail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="unsub_created", type="datetime", nullable=false)
     */
    private $unsubCreated;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set unsubMail
     *
     * @param string $unsubMail
     * @return PozSponsorUnsubscribe
     */
    public function setUnsubMail($unsubMail)
    {
        $this->unsubMail = $unsubMail;

        return $this;
    }

    /**
     * Get unsubMail
     *
     * @return string 
     */
    public function getUnsubMail()
    {
        return $this->unsubMail;
    }

    /**
     * Set unsubCreated
     *
     * @param \DateTime $unsubCreated
     * @return PozSponsorUnsubscribe
     */
    public function setUnsubCreated($unsubCreated)
    {
        $this->unsubCreated = $unsubCreated;

        return $this;
    }

    /**
     * Get unsubCreated
     *
     * @return \DateTime 
     */
    public function getUnsubCreated()
    {
        return $this->unsubCreated;
    }
}
