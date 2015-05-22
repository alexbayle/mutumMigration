<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table(name="request")
 * @ORM\Entity
 */
class Request
{
    /**
     * @var integer
     *
     * @ORM\Column(name="requ_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="requestsReceived", cascade={"persist"})
     * @ORM\JoinColumn(name="requ_lender_id", referencedColumnName="user_id")
     */
    private $lender;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="requestsDone")
     * @ORM\JoinColumn(name="requ_borrower_id", referencedColumnName="user_id")
     */
    private $borrower;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="requests")
     * @ORM\JoinColumn(name="requ_prod_id", referencedColumnName="prod_id")
     */
    private $product;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requ_date_creation", type="datetime", nullable=false)
     */
    private $requDateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requ_date_from", type="date", nullable=false)
     */
    private $requDateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requ_date_to", type="date", nullable=false)
     */
    private $requDateTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="requ_prol_id", type="integer", nullable=true)
     */
    private $requProlId;

    /**
     * @var integer
     *
     * @ORM\Column(name="requ_credit", type="integer", nullable=false)
     */
    private $requCredit;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Discussion", cascade={"persist"})
     * @ORM\JoinColumn(name="requ_discussion", referencedColumnName="disc_id")
     */
    private $requDiscussion;

    /**
     * @var string
     *
     * @ORM\Column(name="requ_code", type="string", length=255, nullable=true)
     */
    private $requCode;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="RequestStatus", inversedBy="requests", cascade={"persist"})
     * @ORM\JoinColumn(name="requ_status", referencedColumnName="reqs_id")
     */
    private $requStatus;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Notation")
     * @ORM\JoinColumn(name="requ_lender_nota_id", referencedColumnName="nota_id")
     */
    private $requLenderNotaId;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Notation")
     * @ORM\JoinColumn(name="requ_borrower_nota_id", referencedColumnName="nota_id")
     */
    private $requBorrowerNotaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="requ_prod_note", type="integer", nullable=false)
     */
    private $requProdNote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requ_lender_archive", type="boolean", nullable=false)
     */
    private $requLenderArchive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requ_borrower_archive", type="boolean", nullable=false)
     */
    private $requBorrowerArchive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requ_lender_read", type="boolean", nullable=false)
     */
    private $requLenderRead;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requ_borrower_read", type="boolean", nullable=false)
     */
    private $requBorrowerRead;

    /**
     * @var integer
     *
     * @ORM\Column(name="requ_caut_id", type="integer", nullable=true)
     */
    private $requCautId;


    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="request", cascade={"persist"})
     * @ORM\JoinColumn(name="requ_id", referencedColumnName="post_requ_id")
     */
    private $posts;

    /**
     *
     */
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }


    /**
     * Get requId
     *
     * @return integer
     */
    public function getRequId()
    {
        return $this->requId;
    }

    /**
     * @return mixed
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param mixed $borrower
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;
    }

    /**
     * @return mixed
     */
    public function getLender()
    {
        return $this->lender;
    }

    /**
     * @param User $lender
     */
    public function setLender($lender)
    {
        $lender->setRequestsReceived($this);
        $this->lender = $lender;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct(Product $product = null)
    {
        $this->product = $product;
    }



    /**
     * Set requDateCreation
     *
     * @param \DateTime $requDateCreation
     * @return Request
     */
    public function setRequDateCreation($requDateCreation)
    {
        $this->requDateCreation = $requDateCreation;

        return $this;
    }

    /**
     * Get requDateCreation
     *
     * @return \DateTime
     */
    public function getRequDateCreation()
    {
        return $this->requDateCreation;
    }

    /**
     * Set requDateFrom
     *
     * @param \DateTime $requDateFrom
     * @return Request
     */
    public function setRequDateFrom($requDateFrom)
    {
        $this->requDateFrom = $requDateFrom;

        return $this;
    }

    /**
     * Get requDateFrom
     *
     * @return \DateTime
     */
    public function getRequDateFrom()
    {
        return $this->requDateFrom;
    }

    /**
     * Set requDateTo
     *
     * @param \DateTime $requDateTo
     * @return Request
     */
    public function setRequDateTo($requDateTo)
    {
        $this->requDateTo = $requDateTo;

        return $this;
    }

    /**
     * Get requDateTo
     *
     * @return \DateTime
     */
    public function getRequDateTo()
    {
        return $this->requDateTo;
    }

    /**
     * Set requProlId
     *
     * @param integer $requProlId
     * @return Request
     */
    public function setRequProlId($requProlId)
    {
        $this->requProlId = $requProlId;

        return $this;
    }

    /**
     * Get requProlId
     *
     * @return integer
     */
    public function getRequProlId()
    {
        return $this->requProlId;
    }

    /**
     * Set requCredit
     *
     * @param integer $requCredit
     * @return Request
     */
    public function setRequCredit($requCredit)
    {
        $this->requCredit = $requCredit;

        return $this;
    }

    /**
     * Get requCredit
     *
     * @return integer
     */
    public function getRequCredit()
    {
        return $this->requCredit;
    }

    /**
     * Set requDiscussion
     *
     * @param integer $requDiscussion
     * @return Request
     */
    public function setRequDiscussion($requDiscussion)
    {
        $this->requDiscussion = $requDiscussion;

        return $this;
    }

    /**
     * Get requDiscussion
     *
     * @return integer
     */
    public function getRequDiscussion()
    {
        return $this->requDiscussion;
    }

    /**
     * Set requCode
     *
     * @param string $requCode
     * @return Request
     */
    public function setRequCode($requCode)
    {
        $this->requCode = $requCode;

        return $this;
    }

    /**
     * Get requCode
     *
     * @return string
     */
    public function getRequCode()
    {
        return $this->requCode;
    }

    /**
     * Set requStatus
     *
     * @param integer $requStatus
     * @return Request
     */
    public function setRequStatus($requStatus)
    {
        $this->requStatus = $requStatus;

        return $this;
    }

    /**
     * Get requStatus
     *
     * @return integer
     */
    public function getRequStatus()
    {
        return $this->requStatus;
    }

    /**
     * Set requLenderNotaId
     *
     * @param integer $requLenderNotaId
     * @return Request
     */
    public function setRequLenderNotaId($requLenderNotaId)
    {
        $this->requLenderNotaId = $requLenderNotaId;

        return $this;
    }

    /**
     * Get requLenderNotaId
     *
     * @return integer
     */
    public function getRequLenderNotaId()
    {
        return $this->requLenderNotaId;
    }

    /**
     * Set requBorrowerNotaId
     *
     * @param integer $requBorrowerNotaId
     * @return Request
     */
    public function setRequBorrowerNotaId($requBorrowerNotaId)
    {
        $this->requBorrowerNotaId = $requBorrowerNotaId;

        return $this;
    }

    /**
     * Get requBorrowerNotaId
     *
     * @return integer
     */
    public function getRequBorrowerNotaId()
    {
        return $this->requBorrowerNotaId;
    }

    /**
     * Set requProdNote
     *
     * @param integer $requProdNote
     * @return Request
     */
    public function setRequProdNote($requProdNote)
    {
        $this->requProdNote = $requProdNote;

        return $this;
    }

    /**
     * Get requProdNote
     *
     * @return integer
     */
    public function getRequProdNote()
    {
        return $this->requProdNote;
    }

    /**
     * Set requLenderArchive
     *
     * @param boolean $requLenderArchive
     * @return Request
     */
    public function setRequLenderArchive($requLenderArchive)
    {
        $this->requLenderArchive = $requLenderArchive;

        return $this;
    }

    /**
     * Get requLenderArchive
     *
     * @return boolean
     */
    public function getRequLenderArchive()
    {
        return $this->requLenderArchive;
    }

    /**
     * Set requBorrowerArchive
     *
     * @param boolean $requBorrowerArchive
     * @return Request
     */
    public function setRequBorrowerArchive($requBorrowerArchive)
    {
        $this->requBorrowerArchive = $requBorrowerArchive;

        return $this;
    }

    /**
     * Get requBorrowerArchive
     *
     * @return boolean
     */
    public function getRequBorrowerArchive()
    {
        return $this->requBorrowerArchive;
    }

    /**
     * Set requLenderRead
     *
     * @param boolean $requLenderRead
     * @return Request
     */
    public function setRequLenderRead($requLenderRead)
    {
        $this->requLenderRead = $requLenderRead;

        return $this;
    }

    /**
     * Get requLenderRead
     *
     * @return boolean
     */
    public function getRequLenderRead()
    {
        return $this->requLenderRead;
    }

    /**
     * Set requBorrowerRead
     *
     * @param boolean $requBorrowerRead
     * @return Request
     */
    public function setRequBorrowerRead($requBorrowerRead)
    {
        $this->requBorrowerRead = $requBorrowerRead;

        return $this;
    }

    /**
     * Get requBorrowerRead
     *
     * @return boolean
     */
    public function getRequBorrowerRead()
    {
        return $this->requBorrowerRead;
    }

    /**
     * Set requCautId
     *
     * @param integer $requCautId
     * @return Request
     */
    public function setRequCautId($requCautId)
    {
        $this->requCautId = $requCautId;

        return $this;
    }

    /**
     * Get requCautId
     *
     * @return integer
     */
    public function getRequCautId()
    {
        return $this->requCautId;
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
