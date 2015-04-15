<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozOnline
 *
 * @ORM\Table(name="poz_online")
 * @ORM\Entity
 */
class PozOnline
{
    /**
     * @var integer
     *
     * @ORM\Column(name="online_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $onlineUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="online_time", type="datetime", nullable=false)
     */
    private $onlineTime;



    /**
     * Get onlineUserId
     *
     * @return integer 
     */
    public function getOnlineUserId()
    {
        return $this->onlineUserId;
    }

    /**
     * Set onlineTime
     *
     * @param \DateTime $onlineTime
     * @return PozOnline
     */
    public function setOnlineTime($onlineTime)
    {
        $this->onlineTime = $onlineTime;

        return $this;
    }

    /**
     * Get onlineTime
     *
     * @return \DateTime 
     */
    public function getOnlineTime()
    {
        return $this->onlineTime;
    }
}
