<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Limitation
 *
 * @ORM\Table(name="limitation")
 * @ORM\Entity
 */
class Limitation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="limi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $limiId;

    /**
     * @ORM\OneToOne(targetEntity="LimitationField", mappedBy="limitation", cascade={"persist"})
     */
    private $field;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="limitations")
     * @ORM\JoinColumn(name="limi_post_id", referencedColumnName="post_id")
     */
    private $post;

    /**
     * Get limiId
     *
     * @return integer
     */
    public function getLimiId()
    {
        return $this->limiId;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $field->setLimitation($this);
        $this->field = $field;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post)
    {
        $post->addLimitations($this);
    }
}
