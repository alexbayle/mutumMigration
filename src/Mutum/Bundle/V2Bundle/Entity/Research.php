<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Research
 *
 * @ORM\Table(name="research", indexes={@ORM\Index(name="rese_user_id", columns={"rese_user_id"})})
 * @ORM\Entity
 */
class Research
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rese_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reseId;



    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="User", inversedBy="searches", cascade={"persist"})
     * @ORM\JoinColumn(name="rese_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="rese_text", type="string", length=255, nullable=false)
     */
    private $reseText;

    /**
     * @var string
     *
     * @ORM\Column(name="rese_location", type="string", length=255, nullable=false)
     */
    private $reseLocation;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CategoryArticle", inversedBy="searches")
     * @ORM\JoinColumn(name="rese_cat", referencedColumnName="cata_id")
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="rese_results", type="integer", nullable=false)
     */
    private $reseResults;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rese_date_creation", type="datetime", nullable=false)
     */
    private $reseDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="rese_ip", type="string", length=15, nullable=false)
     */
    private $reseIp;


    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;


    /**
     * Get reseId
     *
     * @return integer 
     */
    public function getReseId()
    {
        return $this->reseId;
    }

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }



    /**
     * Set reseText
     *
     * @param string $reseText
     * @return Research
     */
    public function setReseText($reseText)
    {
        $this->reseText = $reseText;

        return $this;
    }

    /**
     * Get reseText
     *
     * @return string 
     */
    public function getReseText()
    {
        return $this->reseText;
    }

    /**
     * Set reseLocation
     *
     * @param string $reseLocation
     * @return Research
     */
    public function setReseLocation($reseLocation)
    {
        $this->reseLocation = $reseLocation;

        return $this;
    }

    /**
     * Get reseLocation
     *
     * @return string 
     */
    public function getReseLocation()
    {
        return $this->reseLocation;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(CategoryArticle $category = null)
    {
        $this->category = $category;
    }

    /**
     * Set reseResults
     *
     * @param integer $reseResults
     * @return Research
     */
    public function setReseResults($reseResults)
    {
        $this->reseResults = $reseResults;

        return $this;
    }

    /**
     * Get reseResults
     *
     * @return integer 
     */
    public function getReseResults()
    {
        return $this->reseResults;
    }

    /**
     * Set reseDateCreation
     *
     * @param \DateTime $reseDateCreation
     * @return Research
     */
    public function setReseDateCreation($reseDateCreation)
    {
        $this->reseDateCreation = $reseDateCreation;

        return $this;
    }

    /**
     * Get reseDateCreation
     *
     * @return \DateTime 
     */
    public function getReseDateCreation()
    {
        return $this->reseDateCreation;
    }

    /**
     * Set reseIp
     *
     * @param string $reseIp
     * @return Research
     */
    public function setReseIp($reseIp)
    {
        $this->reseIp = $reseIp;

        return $this;
    }

    /**
     * Get reseIp
     *
     * @return string 
     */
    public function getReseIp()
    {
        return $this->reseIp;
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
