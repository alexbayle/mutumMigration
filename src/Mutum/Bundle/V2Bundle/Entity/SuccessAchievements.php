<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuccessAchievements
 *
 * @ORM\Table(name="success_achievements", indexes={@ORM\Index(name="suca_achi_id", columns={"suca_achi_id"}), @ORM\Index(name="suca_user_id", columns={"suca_user_id"}), @ORM\Index(name="created_at", columns={"created_at"})})
 * @ORM\Entity
 */
class SuccessAchievements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="suca_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucaUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="suca_achi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucaAchiId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;



    /**
     * Set sucaUserId
     *
     * @param integer $sucaUserId
     * @return SuccessAchievements
     */
    public function setSucaUserId($sucaUserId)
    {
        $this->sucaUserId = $sucaUserId;

        return $this;
    }

    /**
     * Get sucaUserId
     *
     * @return integer 
     */
    public function getSucaUserId()
    {
        return $this->sucaUserId;
    }

    /**
     * Set sucaAchiId
     *
     * @param integer $sucaAchiId
     * @return SuccessAchievements
     */
    public function setSucaAchiId($sucaAchiId)
    {
        $this->sucaAchiId = $sucaAchiId;

        return $this;
    }

    /**
     * Get sucaAchiId
     *
     * @return integer 
     */
    public function getSucaAchiId()
    {
        return $this->sucaAchiId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SuccessAchievements
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
