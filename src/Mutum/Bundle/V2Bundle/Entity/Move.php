<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Move
 *
 * @ORM\Table(name="move", indexes={@ORM\Index(name="move_user_id", columns={"move_user_id"}), @ORM\Index(name="move_article_id", columns={"move_article_id"})})
 * @ORM\Entity
 */
class Move
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
     * @var integer
     *
     * @ORM\Column(name="move_user_id", type="integer", nullable=false)
     */
    private $moveUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="move_article_id", type="integer", nullable=true)
     */
    private $moveArticleId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="move_date_creation", type="datetime", nullable=false)
     */
    private $moveDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="move_type", type="string", length=255, nullable=false)
     */
    private $moveType;

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
     * Set moveUserId
     *
     * @param integer $moveUserId
     * @return Move
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
     * Set moveArticleId
     *
     * @param integer $moveArticleId
     * @return Move
     */
    public function setMoveArticleId($moveArticleId)
    {
        $this->moveArticleId = $moveArticleId;

        return $this;
    }

    /**
     * Get moveArticleId
     *
     * @return integer 
     */
    public function getMoveArticleId()
    {
        return $this->moveArticleId;
    }

    /**
     * Set moveDateCreation
     *
     * @param \DateTime $moveDateCreation
     * @return Move
     */
    public function setMoveDateCreation($moveDateCreation)
    {
        $this->moveDateCreation = $moveDateCreation;

        return $this;
    }

    /**
     * Get moveDateCreation
     *
     * @return \DateTime 
     */
    public function getMoveDateCreation()
    {
        return $this->moveDateCreation;
    }

    /**
     * Set moveType
     *
     * @param string $moveType
     * @return Move
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
     * Set moveAmount
     *
     * @param integer $moveAmount
     * @return Move
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
