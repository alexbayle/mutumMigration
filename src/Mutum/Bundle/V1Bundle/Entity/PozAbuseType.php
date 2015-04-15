<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozAbuseType
 *
 * @ORM\Table(name="poz_abuse_type")
 * @ORM\Entity
 */
class PozAbuseType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="abusetype_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $abusetypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="abusetype_text", type="string", length=255, nullable=false)
     */
    private $abusetypeText;



    /**
     * Get abusetypeId
     *
     * @return integer 
     */
    public function getAbusetypeId()
    {
        return $this->abusetypeId;
    }

    /**
     * Set abusetypeText
     *
     * @param string $abusetypeText
     * @return PozAbuseType
     */
    public function setAbusetypeText($abusetypeText)
    {
        $this->abusetypeText = $abusetypeText;

        return $this;
    }

    /**
     * Get abusetypeText
     *
     * @return string 
     */
    public function getAbusetypeText()
    {
        return $this->abusetypeText;
    }
}
