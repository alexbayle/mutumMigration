<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozMove
 *
 * @ORM\Table(name="poz_move", indexes={@ORM\Index(name="poz_move_move_user_id", columns={"move_user_id"})})
 * @ORM\Entity
 */
class PozMove
{
    /**
     * @var integer
     *
     * @ORM\Column(name="move_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moveId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="move_date", type="datetime", nullable=false)
     */
    private $moveDate;

    /**
     * @var string
     *
     * @ORM\Column(name="move_type", type="string", length=50, nullable=false)
     */
    private $moveType;

    /**
     * @var integer
     *
     * @ORM\Column(name="move_user_id", type="integer", nullable=false)
     */
    private $moveUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="move_amount", type="integer", nullable=false)
     */
    private $moveAmount;



    /**
     * Get moveId
     *
     * @return integer 
     */
    public function getMoveId()
    {
        return $this->moveId;
    }

    /**
     * Set moveDate
     *
     * @param \DateTime $moveDate
     * @return PozMove
     */
    public function setMoveDate($moveDate)
    {
        $this->moveDate = $moveDate;

        return $this;
    }

    /**
     * Get moveDate
     *
     * @return \DateTime 
     */
    public function getMoveDate()
    {
        return $this->moveDate;
    }

    /**
     * Set moveType
     *
     * @param string $moveType
     * @return PozMove
     */
    public function setMoveType($moveType)
    {
        $this->moveType = $moveType;

        return $this;
    }

    /**
     * Get moveType
     *
     * @return string 
     */
    public function getMoveType()
    {
        return $this->moveType;
    }

    /**
     * Set moveUserId
     *
     * @param integer $moveUserId
     * @return PozMove
     */
    public function setMoveUserId($moveUserId)
    {
        $this->moveUserId = $moveUserId;

        return $this;
    }

    /**
     * Get moveUserId
     *
     * @return integer 
     */
    public function getMoveUserId()
    {
        return $this->moveUserId;
    }

    /**
     * Set moveAmount
     *
     * @param integer $moveAmount
     * @return PozMove
     */
    public function setMoveAmount($moveAmount)
    {
        $this->moveAmount = $moveAmount;

        return $this;
    }

    /**
     * Get moveAmount
     *
     * @return integer 
     */
    public function getMoveAmount()
    {
        return $this->moveAmount;
    }
}
