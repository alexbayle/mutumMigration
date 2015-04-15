<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestStatus
 *
 * @ORM\Table(name="request_status")
 * @ORM\Entity
 */
class RequestStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reqs_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reqsId;

    /**
     * @var string
     *
     * @ORM\Column(name="reqs_name", type="string", length=255, nullable=false)
     */
    private $reqsName;

    /**
     * @var string
     *
     * @ORM\Column(name="reqs_borrower_info", type="string", length=255, nullable=false)
     */
    private $reqsBorrowerInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="reqs_lender_info", type="string", length=255, nullable=false)
     */
    private $reqsLenderInfo;

    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;



    public function setReqsId($id)
    {
        $this->reqsId = $id;
    }

    /**
     * Get reqsId
     *
     * @return integer 
     */
    public function getReqsId()
    {
        return $this->reqsId;
    }

    /**
     * Set reqsName
     *
     * @param string $reqsName
     * @return RequestStatus
     */
    public function setReqsName($reqsName)
    {
        $this->reqsName = $reqsName;

        return $this;
    }

    /**
     * Get reqsName
     *
     * @return string 
     */
    public function getReqsName()
    {
        return $this->reqsName;
    }

    /**
     * Set reqsBorrowerInfo
     *
     * @param string $reqsBorrowerInfo
     * @return RequestStatus
     */
    public function setReqsBorrowerInfo($reqsBorrowerInfo)
    {
        $this->reqsBorrowerInfo = $reqsBorrowerInfo;

        return $this;
    }

    /**
     * Get reqsBorrowerInfo
     *
     * @return string 
     */
    public function getReqsBorrowerInfo()
    {
        return $this->reqsBorrowerInfo;
    }

    /**
     * Set reqsLenderInfo
     *
     * @param string $reqsLenderInfo
     * @return RequestStatus
     */
    public function setReqsLenderInfo($reqsLenderInfo)
    {
        $this->reqsLenderInfo = $reqsLenderInfo;

        return $this;
    }

    /**
     * Get reqsLenderInfo
     *
     * @return string 
     */
    public function getReqsLenderInfo()
    {
        return $this->reqsLenderInfo;
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
