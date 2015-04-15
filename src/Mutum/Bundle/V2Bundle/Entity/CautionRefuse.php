<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CautionRefuse
 *
 * @ORM\Table(name="caution_refuse")
 * @ORM\Entity
 */
class CautionRefuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="caur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $caurId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="caur_reported", type="boolean", nullable=false)
     */
    private $caurReported;

    /**
     * @var string
     *
     * @ORM\Column(name="caur_reported_message", type="text", nullable=false)
     */
    private $caurReportedMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="caur_message", type="text", nullable=false)
     */
    private $caurMessage;



    /**
     * Get caurId
     *
     * @return integer 
     */
    public function getCaurId()
    {
        return $this->caurId;
    }

    /**
     * Set caurReported
     *
     * @param boolean $caurReported
     * @return CautionRefuse
     */
    public function setCaurReported($caurReported)
    {
        $this->caurReported = $caurReported;

        return $this;
    }

    /**
     * Get caurReported
     *
     * @return boolean 
     */
    public function getCaurReported()
    {
        return $this->caurReported;
    }

    /**
     * Set caurReportedMessage
     *
     * @param string $caurReportedMessage
     * @return CautionRefuse
     */
    public function setCaurReportedMessage($caurReportedMessage)
    {
        $this->caurReportedMessage = $caurReportedMessage;

        return $this;
    }

    /**
     * Get caurReportedMessage
     *
     * @return string 
     */
    public function getCaurReportedMessage()
    {
        return $this->caurReportedMessage;
    }

    /**
     * Set caurMessage
     *
     * @param string $caurMessage
     * @return CautionRefuse
     */
    public function setCaurMessage($caurMessage)
    {
        $this->caurMessage = $caurMessage;

        return $this;
    }

    /**
     * Get caurMessage
     *
     * @return string 
     */
    public function getCaurMessage()
    {
        return $this->caurMessage;
    }
}
