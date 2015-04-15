<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="post_user_id", columns={"post_user_id"}), @ORM\Index(name="post_comm_id", columns={"post_limitation"}), @ORM\Index(name="post_cat", columns={"post_cat"})})
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_user_id", type="integer", nullable=false)
     */
    private $postUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_limitation", type="integer", nullable=true)
     */
    private $postLimitation;

    /**
     * @var string
     *
     * @ORM\Column(name="post_text", type="text", nullable=false)
     */
    private $postText;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_cat", type="integer", nullable=false)
     */
    private $postCat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date_creation", type="datetime", nullable=false)
     */
    private $postDateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_deleted", type="boolean", nullable=false)
     */
    private $postDeleted;



    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postUserId
     *
     * @param integer $postUserId
     * @return Post
     */
    public function setPostUserId($postUserId)
    {
        $this->postUserId = $postUserId;

        return $this;
    }

    /**
     * Get postUserId
     *
     * @return integer 
     */
    public function getPostUserId()
    {
        return $this->postUserId;
    }

    /**
     * Set postLimitation
     *
     * @param integer $postLimitation
     * @return Post
     */
    public function setPostLimitation($postLimitation)
    {
        $this->postLimitation = $postLimitation;

        return $this;
    }

    /**
     * Get postLimitation
     *
     * @return integer 
     */
    public function getPostLimitation()
    {
        return $this->postLimitation;
    }

    /**
     * Set postText
     *
     * @param string $postText
     * @return Post
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get postText
     *
     * @return string 
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * Set postCat
     *
     * @param integer $postCat
     * @return Post
     */
    public function setPostCat($postCat)
    {
        $this->postCat = $postCat;

        return $this;
    }

    /**
     * Get postCat
     *
     * @return integer 
     */
    public function getPostCat()
    {
        return $this->postCat;
    }

    /**
     * Set postDateCreation
     *
     * @param \DateTime $postDateCreation
     * @return Post
     */
    public function setPostDateCreation($postDateCreation)
    {
        $this->postDateCreation = $postDateCreation;

        return $this;
    }

    /**
     * Get postDateCreation
     *
     * @return \DateTime 
     */
    public function getPostDateCreation()
    {
        return $this->postDateCreation;
    }

    /**
     * Set postDeleted
     *
     * @param boolean $postDeleted
     * @return Post
     */
    public function setPostDeleted($postDeleted)
    {
        $this->postDeleted = $postDeleted;

        return $this;
    }

    /**
     * Get postDeleted
     *
     * @return boolean 
     */
    public function getPostDeleted()
    {
        return $this->postDeleted;
    }
}
