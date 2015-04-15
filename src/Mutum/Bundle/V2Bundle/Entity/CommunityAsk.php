<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityAsk
 *
 * @ORM\Table(name="community_ask", uniqueConstraints={@ORM\UniqueConstraint(name="coma_address", columns={"coma_address"})}, indexes={@ORM\Index(name="coma_user_id", columns={"coma_user_id"}), @ORM\Index(name="coma_type", columns={"coma_type"})})
 * @ORM\Entity
 */
class CommunityAsk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="coma_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="coma_user_id", type="integer", nullable=false)
     */
    private $comaUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="coma_firstname", type="string", length=255, nullable=false)
     */
    private $comaFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="coma_lastname", type="string", length=255, nullable=false)
     */
    private $comaLastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="coma_number", type="integer", nullable=false)
     */
    private $comaNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="coma_address", type="integer", nullable=false)
     */
    private $comaAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="coma_name", type="string", length=255, nullable=false)
     */
    private $comaName;

    /**
     * @var integer
     *
     * @ORM\Column(name="coma_type", type="integer", nullable=false)
     */
    private $comaType;

    /**
     * @var string
     *
     * @ORM\Column(name="coma_text", type="text", nullable=false)
     */
    private $comaText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coma_want", type="boolean", nullable=false)
     */
    private $comaWant;



    /**
     * Get comaId
     *
     * @return integer 
     */
    public function getComaId()
    {
        return $this->comaId;
    }

    /**
     * Set comaUserId
     *
     * @param integer $comaUserId
     * @return CommunityAsk
     */
    public function setComaUserId($comaUserId)
    {
        $this->comaUserId = $comaUserId;

        return $this;
    }

    /**
     * Get comaUserId
     *
     * @return integer 
     */
    public function getComaUserId()
    {
        return $this->comaUserId;
    }

    /**
     * Set comaFirstname
     *
     * @param string $comaFirstname
     * @return CommunityAsk
     */
    public function setComaFirstname($comaFirstname)
    {
        $this->comaFirstname = $comaFirstname;

        return $this;
    }

    /**
     * Get comaFirstname
     *
     * @return string 
     */
    public function getComaFirstname()
    {
        return $this->comaFirstname;
    }

    /**
     * Set comaLastname
     *
     * @param string $comaLastname
     * @return CommunityAsk
     */
    public function setComaLastname($comaLastname)
    {
        $this->comaLastname = $comaLastname;

        return $this;
    }

    /**
     * Get comaLastname
     *
     * @return string 
     */
    public function getComaLastname()
    {
        return $this->comaLastname;
    }

    /**
     * Set comaNumber
     *
     * @param integer $comaNumber
     * @return CommunityAsk
     */
    public function setComaNumber($comaNumber)
    {
        $this->comaNumber = $comaNumber;

        return $this;
    }

    /**
     * Get comaNumber
     *
     * @return integer 
     */
    public function getComaNumber()
    {
        return $this->comaNumber;
    }

    /**
     * Set comaAddress
     *
     * @param integer $comaAddress
     * @return CommunityAsk
     */
    public function setComaAddress($comaAddress)
    {
        $this->comaAddress = $comaAddress;

        return $this;
    }

    /**
     * Get comaAddress
     *
     * @return integer 
     */
    public function getComaAddress()
    {
        return $this->comaAddress;
    }

    /**
     * Set comaName
     *
     * @param string $comaName
     * @return CommunityAsk
     */
    public function setComaName($comaName)
    {
        $this->comaName = $comaName;

        return $this;
    }

    /**
     * Get comaName
     *
     * @return string 
     */
    public function getComaName()
    {
        return $this->comaName;
    }

    /**
     * Set comaType
     *
     * @param integer $comaType
     * @return CommunityAsk
     */
    public function setComaType($comaType)
    {
        $this->comaType = $comaType;

        return $this;
    }

    /**
     * Get comaType
     *
     * @return integer 
     */
    public function getComaType()
    {
        return $this->comaType;
    }

    /**
     * Set comaText
     *
     * @param string $comaText
     * @return CommunityAsk
     */
    public function setComaText($comaText)
    {
        $this->comaText = $comaText;

        return $this;
    }

    /**
     * Get comaText
     *
     * @return string 
     */
    public function getComaText()
    {
        return $this->comaText;
    }

    /**
     * Set comaWant
     *
     * @param boolean $comaWant
     * @return CommunityAsk
     */
    public function setComaWant($comaWant)
    {
        $this->comaWant = $comaWant;

        return $this;
    }

    /**
     * Get comaWant
     *
     * @return boolean 
     */
    public function getComaWant()
    {
        return $this->comaWant;
    }
}
