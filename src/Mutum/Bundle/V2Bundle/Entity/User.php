<?php

namespace Mutum\Bundle\V2Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="user_email", columns={"user_email"}), @ORM\UniqueConstraint(name="user_facebook_id", columns={"user_facebook_id"})}, indexes={@ORM\Index(name="user_godfather", columns={"user_godfather"}), @ORM\Index(name="user_rank", columns={"user_rank"}), @ORM\Index(name="user_address", columns={"user_address"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_firstname", type="string", length=255, nullable=false)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastname", type="string", length=255, nullable=false)
     */
    private $userLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=255, nullable=false)
     */
    private $userPassword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_admin", type="boolean", nullable=false)
     */
    private $userAdmin;

    /**
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="users", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_address", referencedColumnName="addr_id")
     */
    private $userAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_birthdate", type="date", nullable=true)
     */
    private $userBirthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sex", type="string", length=1, nullable=false)
     */
    private $userSex;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=255, nullable=false)
     */
    private $userPhone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_phone_hide", type="boolean", nullable=false)
     */
    private $userPhoneHide;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sponsor_code", type="string", length=255, nullable=false)
     */
    private $userSponsorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="user_title", type="string", length=255, nullable=true)
     */
    private $userTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_godfather", type="integer", nullable=true)
     */
    private $userGodfather;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mangopay_id", type="integer", nullable=false)
     */
    private $userMangopayId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_facebook_id", type="bigint", nullable=true)
     */
    private $userFacebookId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_credit", type="integer", nullable=true)
     */
    private $userCredit;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Rank")
     * @ORM\JoinColumn(name="user_rank", referencedColumnName="rank_id")
     */
    private $userRank;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_nb_notation", type="integer", nullable=false)
     */
    private $userNbNotation;

    /**
     * @var float
     *
     * @ORM\Column(name="user_notation", type="float", precision=10, scale=0, nullable=true)
     */
    private $userNotation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_creation", type="datetime", nullable=false)
     */
    private $userDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="user_active", type="string", length=255, nullable=false)
     */
    private $userActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_online", type="datetime", nullable=false)
     */
    private $userOnline;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_score", type="integer", nullable=true)
     */
    private $userScore;

    /**
     * @var string
     *
     * @ORM\Column(name="user_token", type="string", nullable=true)
     */
    private $userToken;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="user", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="prod_user_id")
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity="Request", mappedBy="borrower", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="requ_borrower_id")
     */
    private $requestsDone;

    /**
     * @ORM\OneToMany(targetEntity="Request", mappedBy="lender", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="requ_lender_id")
     */
    private $requestsReceived;

    /**
     * @ORM\Column(name="v1", type="integer", nullable=false)
     */
    private $v1;


    /**
     * @ORM\OneToMany(targetEntity="JoinCommunity", mappedBy="user")
     */
    private $joinCommunities;

    /**
     *
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->requestsDone = new ArrayCollection();
        $this->requestsReceived = new ArrayCollection();
        $this->joinCommunities = new ArrayCollection();
    }


    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }


    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userFirstname
     *
     * @param string $userFirstname
     * @return User
     */
    public function setUserFirstname($userFirstname)
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    /**
     * Get userFirstname
     *
     * @return string
     */
    public function getUserFirstname()
    {
        return $this->userFirstname;
    }

    /**
     * Set userLastname
     *
     * @param string $userLastname
     * @return User
     */
    public function setUserLastname($userLastname)
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    /**
     * Get userLastname
     *
     * @return string
     */
    public function getUserLastname()
    {
        return $this->userLastname;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $salt_before = "reno_";
        $salt_after = "_vali";
        $this->userPassword = "r" . sha1($salt_before . $userPassword . $salt_after) . "n";

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userAdmin
     *
     * @param boolean $userAdmin
     * @return User
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return boolean
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set userAddress
     *
     * @param integer $userAddress
     * @return User
     */
    public function setUserAddress(Address $userAddress = null)
    {
        $this->userAddress = $userAddress;

        return $this;
    }


    /**
     * @return Address
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userBirthdate
     *
     * @param \DateTime $userBirthdate
     * @return User
     */
    public function setUserBirthdate($userBirthdate)
    {
        $this->userBirthdate = \DateTime::createFromFormat('d/m/Y', $userBirthdate);

        if (!$this->userBirthdate) {
            $this->userBirthdate = new \DateTime();
        }

        return $this;
    }

    /**
     * Get userBirthdate
     *
     * @return \DateTime
     */
    public function getUserBirthdate()
    {
        return $this->userBirthdate;
    }

    /**
     * Set userSex
     *
     * @param string $userSex
     * @return User
     */
    public function setUserSex($userSex)
    {
        $this->userSex = $userSex;

        return $this;
    }

    /**
     * Get userSex
     *
     * @return string
     */
    public function getUserSex()
    {
        return $this->userSex;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     * @return User
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set userPhoneHide
     *
     * @param boolean $userPhoneHide
     * @return User
     */
    public function setUserPhoneHide($userPhoneHide)
    {
        $this->userPhoneHide = $userPhoneHide;

        return $this;
    }

    /**
     * Get userPhoneHide
     *
     * @return boolean
     */
    public function getUserPhoneHide()
    {
        return $this->userPhoneHide;
    }

    /**
     * Set userSponsorCode
     *
     * @param string $userSponsorCode
     * @return User
     */
    public function setUserSponsorCode($userSponsorCode)
    {
        $this->userSponsorCode = $userSponsorCode;

        return $this;
    }

    /**
     * Get userSponsorCode
     *
     * @return string
     */
    public function getUserSponsorCode()
    {
        return $this->userSponsorCode;
    }

    /**
     * Set userTitle
     *
     * @param string $userTitle
     * @return User
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;

        return $this;
    }

    /**
     * Get userTitle
     *
     * @return string
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * Set userGodfather
     *
     * @param integer $userGodfather
     * @return User
     */
    public function setUserGodfather($userGodfather)
    {
        $this->userGodfather = $userGodfather;

        return $this;
    }

    /**
     * Get userGodfather
     *
     * @return integer
     */
    public function getUserGodfather()
    {
        return $this->userGodfather;
    }

    /**
     * Set userMangopayId
     *
     * @param integer $userMangopayId
     * @return User
     */
    public function setUserMangopayId($userMangopayId)
    {
        $this->userMangopayId = $userMangopayId;

        return $this;
    }

    /**
     * Get userMangopayId
     *
     * @return integer
     */
    public function getUserMangopayId()
    {
        return $this->userMangopayId;
    }

    /**
     * Set userFacebookId
     *
     * @param integer $userFacebookId
     * @return User
     */
    public function setUserFacebookId($userFacebookId)
    {
        $this->userFacebookId = $userFacebookId;

        return $this;
    }

    /**
     * Get userFacebookId
     *
     * @return integer
     */
    public function getUserFacebookId()
    {
        return $this->userFacebookId;
    }

    /**
     * Set userCredit
     *
     * @param integer $userCredit
     * @return User
     */
    public function setUserCredit($userCredit)
    {
        $this->userCredit = $userCredit;

        return $this;
    }

    /**
     * Get userCredit
     *
     * @return integer
     */
    public function getUserCredit()
    {
        return $this->userCredit;
    }

    /**
     * Set userRank
     *
     * @param integer $userRank
     * @return User
     */
    public function setUserRank($userRank = null)
    {
        $this->userRank = $userRank;

        return $this;
    }

    /**
     * Get userRank
     *
     * @return integer
     */
    public function getUserRank()
    {
        return $this->userRank;
    }

    /**
     * Set userNbNotation
     *
     * @param integer $userNbNotation
     * @return User
     */
    public function setUserNbNotation($userNbNotation)
    {
        $this->userNbNotation = $userNbNotation;

        return $this;
    }

    /**
     * Get userNbNotation
     *
     * @return integer
     */
    public function getUserNbNotation()
    {
        return $this->userNbNotation;
    }

    /**
     * Set userNotation
     *
     * @param float $userNotation
     * @return User
     */
    public function setUserNotation($userNotation)
    {
        $this->userNotation = $userNotation;

        return $this;
    }

    /**
     * Get userNotation
     *
     * @return float
     */
    public function getUserNotation()
    {
        return $this->userNotation;
    }

    /**
     * Set userDateCreation
     *
     * @param \DateTime $userDateCreation
     * @return User
     */
    public function setUserDateCreation($userDateCreation)
    {
        $this->userDateCreation = $userDateCreation;

        return $this;
    }

    /**
     * Get userDateCreation
     *
     * @return \DateTime
     */
    public function getUserDateCreation()
    {
        return $this->userDateCreation;
    }

    /**
     * Set userActive
     *
     * @param string $userActive
     * @return User
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return string
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userOnline
     *
     * @param \DateTime $userOnline
     * @return User
     */
    public function setUserOnline($userOnline)
    {
        $this->userOnline = $userOnline;

        return $this;
    }

    /**
     * Get userOnline
     *
     * @return \DateTime
     */
    public function getUserOnline()
    {
        return $this->userOnline;
    }

    /**
     * Set userScore
     *
     * @param integer $userScore
     * @return User
     */
    public function setUserScore($userScore)
    {
        $this->userScore = $userScore;

        return $this;
    }

    /**
     * Get userScore
     *
     * @return integer
     */
    public function getUserScore()
    {
        return $this->userScore;
    }

    /**
     * @param string $userToken
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
    }

    /**
     * @return string
     */
    public function getUserToken()
    {
        return $this->userToken;
    }


    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products = null)
    {
        $this->products = new ArrayCollection();
        foreach ($products as $product) {
            $this->addProduct($product);
        }
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        if (!$product->getUser()) {
            $product->setUser($this);
            $this->products[] = $product;
        }
    }

    /**
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * @return mixed
     */
    public function getRequestsDone()
    {
        return $this->requestsDone;
    }

    /**
     * @param mixed $requestsDone
     */
    public function setRequestsDone($requestsDone)
    {
        $this->requestsDone = new ArrayCollection();
        foreach ($requestsDone as $request) {
            $this->addRequestDone($request);
        }
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
     * @param Request $request
     */
    public function addRequestDone(Request $request)
    {
        $request->setBorrower($this);
        $this->requestsDone[] = $request;
    }

    /**
     * @param Request $request
     */
    public function removeRequestDone(Request $request)
    {
        $this->requestsDone->removeElement($request);
    }

    /**
     * @return mixed
     */
    public function getRequestsReceived()
    {
        return $this->requestsReceived;
    }

    /**
     * @param mixed $requestsReceived
     */
    public function setRequestsReceived($requestsReceived)
    {
        $this->requestsReceived = new ArrayCollection();
        foreach ($requestsReceived as $request) {
            $this->addRequestReceived($request);
        }
    }

    /**
     * @param Request $request
     */
    public function addRequestReceived(Request $request)
    {
        $request->setLender($this);
        $this->requestsReceived[] = $request;
    }

    /**
     * @param Request $request
     */
    public function removeRequestReceived(Request $request)
    {
        $this->requestsReceived->removeElement($request);
    }

    /**
     * @return mixed
     */
    public function getJoinCommunities()
    {
        return $this->joinCommunities;
    }

    /**
     * @param mixed $joinCommunities
     */
    public function setJoinCommunities($joinCommunities)
    {
        $this->joinCommunities = new ArrayCollection();
        foreach ($joinCommunities as $joinCommunity)
        {
            $this->addJoinCommunities($joinCommunity);
        }
    }


    public function addJoinCommunities(JoinCommunity $joinCommunity)
    {
        $joinCommunity->setJoinUser($this);
        $this->joinCommunities[] = $joinCommunity;
    }



}
