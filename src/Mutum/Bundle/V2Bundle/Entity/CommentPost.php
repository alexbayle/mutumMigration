<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentPost
 *
 * @ORM\Table(name="comment_post", indexes={@ORM\Index(name="comp_post_id", columns={"comp_post_id"}), @ORM\Index(name="comp_user_id", columns={"comp_user_id"})})
 * @ORM\Entity
 */
class CommentPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_text", type="text", nullable=false)
     */
    private $compText;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_post_id", type="integer", nullable=false)
     */
    private $compPostId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_user_id", type="integer", nullable=false)
     */
    private $compUserId;



    /**
     * Get compId
     *
     * @return integer 
     */
    public function getCompId()
    {
        return $this->compId;
    }

    /**
     * Set compText
     *
     * @param string $compText
     * @return CommentPost
     */
    public function setCompText($compText)
    {
        $this->compText = $compText;

        return $this;
    }

    /**
     * Get compText
     *
     * @return string 
     */
    public function getCompText()
    {
        return $this->compText;
    }

    /**
     * Set compPostId
     *
     * @param integer $compPostId
     * @return CommentPost
     */
    public function setCompPostId($compPostId)
    {
        $this->compPostId = $compPostId;

        return $this;
    }

    /**
     * Get compPostId
     *
     * @return integer 
     */
    public function getCompPostId()
    {
        return $this->compPostId;
    }

    /**
     * Set compUserId
     *
     * @param integer $compUserId
     * @return CommentPost
     */
    public function setCompUserId($compUserId)
    {
        $this->compUserId = $compUserId;

        return $this;
    }

    /**
     * Get compUserId
     *
     * @return integer 
     */
    public function getCompUserId()
    {
        return $this->compUserId;
    }
}
