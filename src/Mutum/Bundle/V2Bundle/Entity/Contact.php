<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="cont_user_id_b", columns={"cont_user_id_b"})})
 * @ORM\Entity
 */
class Contact
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="cont_user_id_a", referencedColumnName="user_id")
     */
    private $from;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="cont_user_id_b", referencedColumnName="user_id")
     */
    private $to;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cont_date_creation", type="datetime", nullable=false)
     */
    private $contDateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cont_date_accepted", type="datetime", nullable=true)
     */
    private $contDateAccepted;

    /**
     * @var string
     *
     * @ORM\Column(name="cont_status", type="string", length=1, nullable=false)
     */
    private $contStatus;

    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;

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
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }


    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }


    /**
     * Set contDateCreation
     *
     * @param \DateTime $contDateCreation
     * @return Contact
     */
    public function setContDateCreation($contDateCreation)
    {
        $this->contDateCreation = $contDateCreation;

        return $this;
    }

    /**
     * Get contDateCreation
     *
     * @return \DateTime
     */
    public function getContDateCreation()
    {
        return $this->contDateCreation;
    }

    /**
     * Set contDateAccepted
     *
     * @param \DateTime $contDateAccepted
     * @return Contact
     */
    public function setContDateAccepted($contDateAccepted)
    {
        $this->contDateAccepted = $contDateAccepted;

        return $this;
    }

    /**
     * Get contDateAccepted
     *
     * @return \DateTime
     */
    public function getContDateAccepted()
    {
        return $this->contDateAccepted;
    }

    /**
     * Set contStatus
     *
     * @param string $contStatus
     * @return Contact
     */
    public function setContStatus($contStatus)
    {
        $this->contStatus = $contStatus;

        return $this;
    }

    /**
     * Get contStatus
     *
     * @return string
     */
    public function getContStatus()
    {
        return $this->contStatus;
    }

    /**
     * @return mixed
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @param mixed $v1
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }
}
