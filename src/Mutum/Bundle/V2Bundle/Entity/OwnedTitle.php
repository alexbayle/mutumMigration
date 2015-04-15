<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedTitle
 *
 * @ORM\Table(name="owned_title", indexes={@ORM\Index(name="ownt_user_id", columns={"ownt_user_id"})})
 * @ORM\Entity
 */
class OwnedTitle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ownt_spec_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $owntSpecId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownt_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $owntUserId;



    /**
     * Set owntSpecId
     *
     * @param integer $owntSpecId
     * @return OwnedTitle
     */
    public function setOwntSpecId($owntSpecId)
    {
        $this->owntSpecId = $owntSpecId;

        return $this;
    }

    /**
     * Get owntSpecId
     *
     * @return integer 
     */
    public function getOwntSpecId()
    {
        return $this->owntSpecId;
    }

    /**
     * Set owntUserId
     *
     * @param integer $owntUserId
     * @return OwnedTitle
     */
    public function setOwntUserId($owntUserId)
    {
        $this->owntUserId = $owntUserId;

        return $this;
    }

    /**
     * Get owntUserId
     *
     * @return integer 
     */
    public function getOwntUserId()
    {
        return $this->owntUserId;
    }
}
