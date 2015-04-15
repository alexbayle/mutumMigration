<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualProduct
 *
 * @ORM\Table(name="virtual_product")
 * @ORM\Entity
 */
class VirtualProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="virp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $virpId;

    /**
     * @var string
     *
     * @ORM\Column(name="virp_name", type="string", length=255, nullable=true)
     */
    private $virpName;



    /**
     * Get virpId
     *
     * @return integer 
     */
    public function getVirpId()
    {
        return $this->virpId;
    }

    /**
     * Set virpName
     *
     * @param string $virpName
     * @return VirtualProduct
     */
    public function setVirpName($virpName)
    {
        $this->virpName = $virpName;

        return $this;
    }

    /**
     * Get virpName
     *
     * @return string 
     */
    public function getVirpName()
    {
        return $this->virpName;
    }
}
