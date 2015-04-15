<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozRequestStatus
 *
 * @ORM\Table(name="poz_request_status")
 * @ORM\Entity
 */
class PozRequestStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="requeststatus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requeststatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="requeststatus_name", type="string", length=255, nullable=false)
     */
    private $requeststatusName;

    /**
     * @var string
     *
     * @ORM\Column(name="requeststatus_emprunteur", type="string", length=255, nullable=false)
     */
    private $requeststatusEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="requeststatus_preteur", type="string", length=255, nullable=false)
     */
    private $requeststatusPreteur;



    /**
     * Get requeststatusId
     *
     * @return integer 
     */
    public function getRequeststatusId()
    {
        return $this->requeststatusId;
    }

    /**
     * Set requeststatusName
     *
     * @param string $requeststatusName
     * @return PozRequestStatus
     */
    public function setRequeststatusName($requeststatusName)
    {
        $this->requeststatusName = $requeststatusName;

        return $this;
    }

    /**
     * Get requeststatusName
     *
     * @return string 
     */
    public function getRequeststatusName()
    {
        return $this->requeststatusName;
    }

    /**
     * Set requeststatusEmprunteur
     *
     * @param string $requeststatusEmprunteur
     * @return PozRequestStatus
     */
    public function setRequeststatusEmprunteur($requeststatusEmprunteur)
    {
        $this->requeststatusEmprunteur = $requeststatusEmprunteur;

        return $this;
    }

    /**
     * Get requeststatusEmprunteur
     *
     * @return string 
     */
    public function getRequeststatusEmprunteur()
    {
        return $this->requeststatusEmprunteur;
    }

    /**
     * Set requeststatusPreteur
     *
     * @param string $requeststatusPreteur
     * @return PozRequestStatus
     */
    public function setRequeststatusPreteur($requeststatusPreteur)
    {
        $this->requeststatusPreteur = $requeststatusPreteur;

        return $this;
    }

    /**
     * Get requeststatusPreteur
     *
     * @return string 
     */
    public function getRequeststatusPreteur()
    {
        return $this->requeststatusPreteur;
    }
}
