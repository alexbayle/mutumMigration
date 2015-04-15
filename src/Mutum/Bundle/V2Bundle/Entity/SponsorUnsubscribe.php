<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SponsorUnsubscribe
 *
 * @ORM\Table(name="sponsor_unsubscribe")
 * @ORM\Entity
 */
class SponsorUnsubscribe
{

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="spou_email", type="string", length=255, nullable=false)
     */
    private $spouEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spou_date_creation", type="datetime", nullable=false)
     */
    private $spouDateCreation;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    public function setSpouEmail($email)
    {
        $this->spouEmail = $email;
    }

    /**
     * Get spouEmail
     *
     * @return string
     */
    public function getSpouEmail()
    {
        return $this->spouEmail;
    }

    /**
     * Set spouDateCreation
     *
     * @param \DateTime $spouDateCreation
     * @return SponsorUnsubscribe
     */
    public function setSpouDateCreation($spouDateCreation)
    {
        $this->spouDateCreation = $spouDateCreation;

        return $this;
    }

    /**
     * Get spouDateCreation
     *
     * @return \DateTime
     */
    public function getSpouDateCreation()
    {
        return $this->spouDateCreation;
    }
}
