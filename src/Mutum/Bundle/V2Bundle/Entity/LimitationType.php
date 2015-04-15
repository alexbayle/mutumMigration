<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LimitationType
 *
 * @ORM\Table(name="limitation_type")
 * @ORM\Entity
 */
class LimitationType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="limt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $limtId;

    /**
     * @var string
     *
     * @ORM\Column(name="limt_name", type="string", length=255, nullable=false)
     */
    private $limtName;



    /**
     * Get limtId
     *
     * @return integer 
     */
    public function getLimtId()
    {
        return $this->limtId;
    }

    /**
     * Set limtName
     *
     * @param string $limtName
     * @return LimitationType
     */
    public function setLimtName($limtName)
    {
        $this->limtName = $limtName;

        return $this;
    }

    /**
     * Get limtName
     *
     * @return string 
     */
    public function getLimtName()
    {
        return $this->limtName;
    }
}
