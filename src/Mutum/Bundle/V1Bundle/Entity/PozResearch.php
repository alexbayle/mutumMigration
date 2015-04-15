<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozResearch
 *
 * @ORM\Table(name="poz_research")
 * @ORM\Entity
 */
class PozResearch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="research_id", type="string", length=15, nullable=false)
     */
    private $researchId;

    /**
     * @var string
     *
     * @ORM\Column(name="research_text", type="string", length=255, nullable=false)
     */
    private $researchText;

    /**
     * @var integer
     *
     * @ORM\Column(name="research_cat", type="integer", nullable=false)
     */
    private $researchCat;

    /**
     * @var string
     *
     * @ORM\Column(name="research_location", type="string", length=255, nullable=false)
     */
    private $researchLocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="research_results", type="integer", nullable=false)
     */
    private $researchResults;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="research_created", type="datetime", nullable=false)
     */
    private $researchCreated;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set researchId
     *
     * @param string $researchId
     * @return PozResearch
     */
    public function setResearchId($researchId)
    {
        $this->researchId = $researchId;

        return $this;
    }

    /**
     * Get researchId
     *
     * @return string 
     */
    public function getResearchId()
    {
        return $this->researchId;
    }

    /**
     * Set researchText
     *
     * @param string $researchText
     * @return PozResearch
     */
    public function setResearchText($researchText)
    {
        $this->researchText = $researchText;

        return $this;
    }

    /**
     * Get researchText
     *
     * @return string 
     */
    public function getResearchText()
    {
        return $this->researchText;
    }

    /**
     * Set researchCat
     *
     * @param integer $researchCat
     * @return PozResearch
     */
    public function setResearchCat($researchCat)
    {
        $this->researchCat = $researchCat;

        return $this;
    }

    /**
     * Get researchCat
     *
     * @return integer 
     */
    public function getResearchCat()
    {
        return $this->researchCat;
    }

    /**
     * Set researchLocation
     *
     * @param string $researchLocation
     * @return PozResearch
     */
    public function setResearchLocation($researchLocation)
    {
        $this->researchLocation = $researchLocation;

        return $this;
    }

    /**
     * Get researchLocation
     *
     * @return string 
     */
    public function getResearchLocation()
    {
        return $this->researchLocation;
    }

    /**
     * Set researchResults
     *
     * @param integer $researchResults
     * @return PozResearch
     */
    public function setResearchResults($researchResults)
    {
        $this->researchResults = $researchResults;

        return $this;
    }

    /**
     * Get researchResults
     *
     * @return integer 
     */
    public function getResearchResults()
    {
        return $this->researchResults;
    }

    /**
     * Set researchCreated
     *
     * @param \DateTime $researchCreated
     * @return PozResearch
     */
    public function setResearchCreated($researchCreated)
    {
        $this->researchCreated = $researchCreated;

        return $this;
    }

    /**
     * Get researchCreated
     *
     * @return \DateTime 
     */
    public function getResearchCreated()
    {
        return $this->researchCreated;
    }
}
