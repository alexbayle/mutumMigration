<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="post_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Limitation", mappedBy="posts", cascade={"persist"})
     * @ORM\JoinColumn(name="post_id", referencedColumnName="limi_post_id")
     */
    private $limitations;

    /**
     * @var string
     *
     * @ORM\Column(name="post_text", type="text", nullable=false)
     */
    private $postText;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="PostCat", inversedBy="posts")
     * @ORM\JoinColumn(name="post_cat", referencedColumnName="posc_id")
     */
    private $category;

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
     * @ORM\ManyToOne(targetEntity="Request", inversedBy="posts")
     * @ORM\JoinColumn(name="post_requ_id", referencedColumnName="requ_id")
     */
    private $request;

    public function __construct()
    {
        $this->limitations = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param PostCat $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getLimitations()
    {
        return $this->limitations;
    }

    /**
     * @param int $limitations
     */
    public function setLimitations($limitations)
    {
        $this->limitations = new ArrayCollection();
        foreach ($limitations as $limitation)
        {
            $this->addLimitations($limitation);
        }
    }

    public function addLimitations(Limitation $limitation)
    {
        $limitation->setPost($this);
        $this->limitations[] = $limitation;
    }

    public function removeLimitations(Limitation $limitation)
    {
        $this->limitations->removeElement($limitation);
    }

    /**
     * @return \DateTime
     */
    public function getPostDateCreation()
    {
        return $this->postDateCreation;
    }

    /**
     * @param \DateTime $postDateCreation
     */
    public function setPostDateCreation($postDateCreation)
    {
        $this->postDateCreation = $postDateCreation;
    }

    /**
     * @return boolean
     */
    public function isPostDeleted()
    {
        return $this->postDeleted;
    }

    /**
     * @param boolean $postDeleted
     */
    public function setPostDeleted($postDeleted)
    {
        $this->postDeleted = $postDeleted;
    }

    /**
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return string
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * @param string $postText
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;
    }

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}
