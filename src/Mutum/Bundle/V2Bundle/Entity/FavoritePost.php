<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FavoritePost
 *
 * @ORM\Table(name="favorite_post", indexes={@ORM\Index(name="favp_post_id", columns={"favp_post_id"})})
 * @ORM\Entity
 */
class FavoritePost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="favp_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $favpUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="favp_post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $favpPostId;



    /**
     * Set favpUserId
     *
     * @param integer $favpUserId
     * @return FavoritePost
     */
    public function setFavpUserId($favpUserId)
    {
        $this->favpUserId = $favpUserId;

        return $this;
    }

    /**
     * Get favpUserId
     *
     * @return integer 
     */
    public function getFavpUserId()
    {
        return $this->favpUserId;
    }

    /**
     * Set favpPostId
     *
     * @param integer $favpPostId
     * @return FavoritePost
     */
    public function setFavpPostId($favpPostId)
    {
        $this->favpPostId = $favpPostId;

        return $this;
    }

    /**
     * Get favpPostId
     *
     * @return integer 
     */
    public function getFavpPostId()
    {
        return $this->favpPostId;
    }
}
