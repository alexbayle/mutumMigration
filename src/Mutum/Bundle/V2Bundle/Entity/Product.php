<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="prod_user_id", columns={"prod_user_id"}), @ORM\Index(name="prod_limitation", columns={"prod_limitation"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prod_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodId;

    /**
     * @ORM\OneToOne(targetEntity="Article", mappedBy="product", cascade={"persist", "remove"})
     * @ ORM\JoinColumn(name="prod_id", referencedColumnName="arti_prod_id")
     */
    private $article;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="products")
     * @ORM\JoinColumn(name="prod_user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_name", type="string", length=255, nullable=false)
     */
    private $prodName;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_desc", type="text", nullable=false)
     */
    private $prodDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_limitation", type="integer", nullable=true)
     */
    private $prodLimitation;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_win", type="integer", nullable=true)
     */
    private $prodWin;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_notation", type="integer", nullable=true)
     */
    private $prodNotation;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_nb_notation", type="integer", nullable=false)
     */
    private $prodNbNotation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prod_date_creation", type="datetime", nullable=false)
     */
    private $prodDateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prod_deleted", type="boolean", nullable=false)
     */
    private $prodDeleted;

    /**
     * @ ORM\OneToOne(targetEntity="LocatedProduct", inversedBy="product", cascade={"persist", "remove"})
     * @ ORM\JoinColumn(name="prod_id", referencedColumnName="locp_prod_id")
     */
    //private $address;

    /**
     * @ORM\ManyToMany(targetEntity="Address", cascade={"persist"})
     * @ORM\JoinTable(name="located_product",
     *      joinColumns={@ORM\JoinColumn(name="locp_prod_id", referencedColumnName="prod_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="locp_addr_id", referencedColumnName="addr_id")}
     *      )
     **/
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Request", mappedBy="product", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="prod_id", referencedColumnName="requ_prod_id")
     */
    private $requests;

    /**
     * @ORM\ManyToMany(targetEntity="Community")
     * @ORM\JoinTable(name="share_community",
     *  joinColumns={@ORM\JoinColumn(name="shac_prod_id", referencedColumnName="prod_id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="shac_comm_id", referencedColumnName="comm_id")}
     * )
     */
    private $communities;

    /**
     * @ORM\Column(name="v1", type="integer")
     */
    private $v1;

    /**
     *
     */
    public function __construct()
    {
        $this->requests = new ArrayCollection();
        $this->communities = new ArrayCollection();
    }

    /**
     * @param $id
     */
    public function setProdId($id)
    {
        $this->prodId = $id;
    }

    /**
     * Get prodId
     *
     * @return integer
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle(Article $article)
    {
        $article->setProduct($this);
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @param mixed $requests
     */
    public function setRequests($requests)
    {
        $this->requests = new ArrayCollection();
        foreach ($requests as $request) {
            $this->addRequests($request);
        }
    }

    /**
     * @param Request $request
     */
    public function addRequests(Request $request)
    {
        $request->setproduct($this);
        $this->requests[] = $request;
    }

    /**
     * @param Request $request
     */
    public function removeRequests(Request $request)
    {
        $this->requests->removeElement($request);
    }


    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Address $address = null)
    {
//        $locatedProduct = new LocatedProduct();
//        $locatedProduct->setProduct($this);
//        $locatedProduct->setAddress($address);

//        $locatedProduct->setLocpAddrId($address);
//        $locatedProduct->setLocpProdId($this);

//        $this->address = $locatedProduct;

//        $address->addProduct($this);
        $addresses = new ArrayCollection();
        $addresses[] = $address;
        $this->address = $addresses;
    }


    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * Set prodName
     *
     * @param string $prodName
     * @return Product
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;

        return $this;
    }

    /**
     * Get prodName
     *
     * @return string
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * Set prodDesc
     *
     * @param string $prodDesc
     * @return Product
     */
    public function setProdDesc($prodDesc)
    {
        $this->prodDesc = $prodDesc;

        return $this;
    }

    /**
     * Get prodDesc
     *
     * @return string
     */
    public function getProdDesc()
    {
        return $this->prodDesc;
    }

    /**
     * Set prodLimitation
     *
     * @param integer $prodLimitation
     * @return Product
     */
    public function setProdLimitation($prodLimitation)
    {
        $this->prodLimitation = $prodLimitation;

        return $this;
    }

    /**
     * Get prodLimitation
     *
     * @return integer
     */
    public function getProdLimitation()
    {
        return $this->prodLimitation;
    }

    /**
     * Set prodWin
     *
     * @param integer $prodWin
     * @return Product
     */
    public function setProdWin($prodWin)
    {
        $this->prodWin = $prodWin;

        return $this;
    }

    /**
     * Get prodWin
     *
     * @return integer
     */
    public function getProdWin()
    {
        return $this->prodWin;
    }

    /**
     * Set prodNotation
     *
     * @param integer $prodNotation
     * @return Product
     */
    public function setProdNotation($prodNotation)
    {
        $this->prodNotation = $prodNotation;

        return $this;
    }

    /**
     * Get prodNotation
     *
     * @return integer
     */
    public function getProdNotation()
    {
        return $this->prodNotation;
    }

    /**
     * Set prodNbNotation
     *
     * @param integer $prodNbNotation
     * @return Product
     */
    public function setProdNbNotation($prodNbNotation)
    {
        $this->prodNbNotation = $prodNbNotation;

        return $this;
    }

    /**
     * Get prodNbNotation
     *
     * @return integer
     */
    public function getProdNbNotation()
    {
        return $this->prodNbNotation;
    }

    /**
     * Set prodDateCreation
     *
     * @param \DateTime $prodDateCreation
     * @return Product
     */
    public function setProdDateCreation($prodDateCreation)
    {
        $this->prodDateCreation = $prodDateCreation;

        return $this;
    }

    /**
     * Get prodDateCreation
     *
     * @return \DateTime
     */
    public function getProdDateCreation()
    {
        return $this->prodDateCreation;
    }

    /**
     * Set prodDeleted
     *
     * @param boolean $prodDeleted
     * @return Product
     */
    public function setProdDeleted($prodDeleted)
    {
        $this->prodDeleted = $prodDeleted;

        return $this;
    }

    /**
     * Get prodDeleted
     *
     * @return boolean
     */
    public function getProdDeleted()
    {
        return $this->prodDeleted;
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

    /**
     * @return mixed
     */
    public function getCommunities()
    {
        return $this->communities;
    }

    /**
     * @param mixed $communities
     */
    public function setCommunities($communities)
    {
        $this->communities = $communities;
    }




}

