<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareCommunity
 *
 * @ORM\Table(name="share_community", indexes={@ORM\Index(name="shac_comm_id", columns={"shac_comm_id"})})
 * @ORM\Entity
 */
class ShareCommunity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="shac_prod_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $shacProdId;

    /**
     * @var integer
     *
     * @ORM\Column(name="shac_comm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $shacCommId;



    /**
     * Set shacProdId
     *
     * @param integer $shacProdId
     * @return ShareCommunity
     */
    public function setShacProdId($shacProdId)
    {
        $this->shacProdId = $shacProdId;

        return $this;
    }

    /**
     * Get shacProdId
     *
     * @return integer 
     */
    public function getShacProdId()
    {
        return $this->shacProdId;
    }

    /**
     * Set shacCommId
     *
     * @param integer $shacCommId
     * @return ShareCommunity
     */
    public function setShacCommId($shacCommId)
    {
        $this->shacCommId = $shacCommId;

        return $this;
    }

    /**
     * Get shacCommId
     *
     * @return integer 
     */
    public function getShacCommId()
    {
        return $this->shacCommId;
    }
}
