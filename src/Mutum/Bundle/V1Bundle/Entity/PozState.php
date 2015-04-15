<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozState
 *
 * @ORM\Table(name="poz_state")
 * @ORM\Entity
 */
class PozState
{
    /**
     * @var integer
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stateId;

    /**
     * @var string
     *
     * @ORM\Column(name="state_text", type="string", length=30, nullable=false)
     */
    private $stateText;



    /**
     * Get stateId
     *
     * @return integer 
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Set stateText
     *
     * @param string $stateText
     * @return PozState
     */
    public function setStateText($stateText)
    {
        $this->stateText = $stateText;

        return $this;
    }

    /**
     * Get stateText
     *
     * @return string 
     */
    public function getStateText()
    {
        return $this->stateText;
    }
}
