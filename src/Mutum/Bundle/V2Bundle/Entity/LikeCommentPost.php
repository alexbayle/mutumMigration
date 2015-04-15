<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikeCommentPost
 *
 * @ORM\Table(name="like_comment_post")
 * @ORM\Entity
 */
class LikeCommentPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="likc_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $likcUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="likc_comp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $likcCompId;



    /**
     * Set likcUserId
     *
     * @param integer $likcUserId
     * @return LikeCommentPost
     */
    public function setLikcUserId($likcUserId)
    {
        $this->likcUserId = $likcUserId;

        return $this;
    }

    /**
     * Get likcUserId
     *
     * @return integer 
     */
    public function getLikcUserId()
    {
        return $this->likcUserId;
    }

    /**
     * Set likcCompId
     *
     * @param integer $likcCompId
     * @return LikeCommentPost
     */
    public function setLikcCompId($likcCompId)
    {
        $this->likcCompId = $likcCompId;

        return $this;
    }

    /**
     * Get likcCompId
     *
     * @return integer 
     */
    public function getLikcCompId()
    {
        return $this->likcCompId;
    }
}
