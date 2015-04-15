<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prolongation
 *
 * @ORM\Table(name="prolongation", indexes={@ORM\Index(name="prol_requ_id", columns={"prol_requ_id"})})
 * @ORM\Entity
 */
class Prolongation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prol_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prolId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prol_requ_id", type="integer", nullable=false)
     */
    private $prolRequId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prol_credit", type="integer", nullable=false)
     */
    private $prolCredit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prol_date", type="date", nullable=false)
     */
    private $prolDate;

    /**
     * @var string
     *
     * @ORM\Column(name="prol_message", type="text", nullable=false)
     */
    private $prolMessage;



    /**
     * Get prolId
     *
     * @return integer 
     */
    public function getProlId()
    {
        return $this->prolId;
    }

    /**
     * Set prolRequId
     *
     * @param integer $prolRequId
     * @return Prolongation
     */
    public function setProlRequId($prolRequId)
    {
        $this->prolRequId = $prolRequId;

        return $this;
    }

    /**
     * Get prolRequId
     *
     * @return integer 
     */
    public function getProlRequId()
    {
        return $this->prolRequId;
    }

    /**
     * Set prolCredit
     *
     * @param integer $prolCredit
     * @return Prolongation
     */
    public function setProlCredit($prolCredit)
    {
        $this->prolCredit = $prolCredit;

        return $this;
    }

    /**
     * Get prolCredit
     *
     * @return integer 
     */
    public function getProlCredit()
    {
        return $this->prolCredit;
    }

    /**
     * Set prolDate
     *
     * @param \DateTime $prolDate
     * @return Prolongation
     */
    public function setProlDate($prolDate)
    {
        $this->prolDate = $prolDate;

        return $this;
    }

    /**
     * Get prolDate
     *
     * @return \DateTime 
     */
    public function getProlDate()
    {
        return $this->prolDate;
    }

    /**
     * Set prolMessage
     *
     * @param string $prolMessage
     * @return Prolongation
     */
    public function setProlMessage($prolMessage)
    {
        $this->prolMessage = $prolMessage;

        return $this;
    }

    /**
     * Get prolMessage
     *
     * @return string 
     */
    public function getProlMessage()
    {
        return $this->prolMessage;
    }
}
