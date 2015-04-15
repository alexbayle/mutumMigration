<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikePost
 *
 * @ORM\Table(name="like_post", indexes={@ORM\Index(name="likp_post_id", columns={"likp_post_id"})})
 * @ORM\Entity
 */
class LikePost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="likp_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $likpUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="likp_post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $likpPostId;



    /**
     * Set likpUserId
     *
     * @param integer $likpUserId
     * @return LikePost
     */
    public function setLikpUserId($likpUserId)
    {
        $this->likpUserId = $likpUserId;

        return $this;
    }

    /**
     * Get likpUserId
     *
     * @return integer 
     */
    public function getLikpUserId()
    {
        return $this->likpUserId;
    }

    /**
     * Set likpPostId
     *
     * @param integer $likpPostId
     * @return LikePost
     */
    public function setLikpPostId($likpPostId)
    {
        $this->likpPostId = $likpPostId;

        return $this;
    }

    /**
     * Get likpPostId
     *
     * @return integer 
     */
    public function getLikpPostId()
    {
        return $this->likpPostId;
    }
}
