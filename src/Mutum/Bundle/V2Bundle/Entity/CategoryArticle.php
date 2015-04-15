<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryArticle
 *
 * @ORM\Table(name="category_article", indexes={@ORM\Index(name="cate_parent_id", columns={"cata_parent_id"})})
 * @ORM\Entity
 */
class CategoryArticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cata_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cataId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cata_parent_id", type="integer", nullable=true)
     */
    private $cataParentId;

    /**
     * @var string
     *
     * @ORM\Column(name="cata_name", type="string", length=255, nullable=false)
     */
    private $cataName;

    /**
     * @var string
     *
     * @ORM\Column(name="cata_desc", type="text", nullable=false)
     */
    private $cataDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="cata_order", type="integer", nullable=false)
     */
    private $cataOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="cata_pictogramme", type="string", length=255, nullable=false)
     */
    private $cataPictogramme;

    /**
     * @var integer
     *
     * @ORM\Column(name="cata_length", type="integer", nullable=false)
     */
    private $cataLength;

    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;


    public function setCataId($id)
    {
        $this->cataId = $id;
    }

    /**
     * Get cataId
     *
     * @return integer 
     */
    public function getCataId()
    {
        return $this->cataId;
    }

    /**
     * Set cataParentId
     *
     * @param integer $cataParentId
     * @return CategoryArticle
     */
    public function setCataParentId($cataParentId)
    {
        $this->cataParentId = $cataParentId;

        return $this;
    }

    /**
     * Get cataParentId
     *
     * @return integer 
     */
    public function getCataParentId()
    {
        return $this->cataParentId;
    }

    /**
     * Set cataName
     *
     * @param string $cataName
     * @return CategoryArticle
     */
    public function setCataName($cataName)
    {
        $this->cataName = $cataName;

        return $this;
    }

    /**
     * Get cataName
     *
     * @return string 
     */
    public function getCataName()
    {
        return $this->cataName;
    }

    /**
     * Set cataDesc
     *
     * @param string $cataDesc
     * @return CategoryArticle
     */
    public function setCataDesc($cataDesc)
    {
        $this->cataDesc = $cataDesc;

        return $this;
    }

    /**
     * Get cataDesc
     *
     * @return string 
     */
    public function getCataDesc()
    {
        return $this->cataDesc;
    }

    /**
     * Set cataOrder
     *
     * @param integer $cataOrder
     * @return CategoryArticle
     */
    public function setCataOrder($cataOrder)
    {
        $this->cataOrder = $cataOrder;

        return $this;
    }

    /**
     * Get cataOrder
     *
     * @return integer 
     */
    public function getCataOrder()
    {
        return $this->cataOrder;
    }

    /**
     * Set cataPictogramme
     *
     * @param string $cataPictogramme
     * @return CategoryArticle
     */
    public function setCataPictogramme($cataPictogramme)
    {
        $this->cataPictogramme = $cataPictogramme;

        return $this;
    }

    /**
     * Get cataPictogramme
     *
     * @return string 
     */
    public function getCataPictogramme()
    {
        return $this->cataPictogramme;
    }

    /**
     * Set cataLength
     *
     * @param integer $cataLength
     * @return CategoryArticle
     */
    public function setCataLength($cataLength)
    {
        $this->cataLength = $cataLength;

        return $this;
    }

    /**
     * Get cataLength
     *
     * @return integer 
     */
    public function getCataLength()
    {
        return $this->cataLength;
    }

    /**
     * @return mixed
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @param mixed $v1
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }


}
