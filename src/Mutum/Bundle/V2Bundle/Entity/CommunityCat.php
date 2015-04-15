<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityCat
 *
 * @ORM\Table(name="community_cat")
 * @ORM\Entity
 */
class CommunityCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comcId;

    /**
     * @var string
     *
     * @ORM\Column(name="comc_name", type="string", length=255, nullable=false)
     */
    private $comcName;



    /**
     * Get comcId
     *
     * @return integer 
     */
    public function getComcId()
    {
        return $this->comcId;
    }

    /**
     * Set comcName
     *
     * @param string $comcName
     * @return CommunityCat
     */
    public function setComcName($comcName)
    {
        $this->comcName = $comcName;

        return $this;
    }

    /**
     * Get comcName
     *
     * @return string 
     */
    public function getComcName()
    {
        return $this->comcName;
    }
}
