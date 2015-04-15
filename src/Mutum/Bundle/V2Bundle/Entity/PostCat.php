<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostCat
 *
 * @ORM\Table(name="post_cat")
 * @ORM\Entity
 */
class PostCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="posc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poscId;

    /**
     * @var string
     *
     * @ORM\Column(name="posc_name", type="string", length=255, nullable=false)
     */
    private $poscName;



    /**
     * Get poscId
     *
     * @return integer 
     */
    public function getPoscId()
    {
        return $this->poscId;
    }

    /**
     * Set poscName
     *
     * @param string $poscName
     * @return PostCat
     */
    public function setPoscName($poscName)
    {
        $this->poscName = $poscName;

        return $this;
    }

    /**
     * Get poscName
     *
     * @return string 
     */
    public function getPoscName()
    {
        return $this->poscName;
    }
}
