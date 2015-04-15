<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualArticle
 *
 * @ORM\Table(name="virtual_article", indexes={@ORM\Index(name="vira_cat", columns={"vira_cat"})})
 * @ORM\Entity
 */
class VirtualArticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vira_virp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $viraVirpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="vira_cat", type="integer", nullable=false)
     */
    private $viraCat;



    /**
     * Get viraVirpId
     *
     * @return integer 
     */
    public function getViraVirpId()
    {
        return $this->viraVirpId;
    }

    /**
     * Set viraCat
     *
     * @param integer $viraCat
     * @return VirtualArticle
     */
    public function setViraCat($viraCat)
    {
        $this->viraCat = $viraCat;

        return $this;
    }

    /**
     * Get viraCat
     *
     * @return integer 
     */
    public function getViraCat()
    {
        return $this->viraCat;
    }
}
