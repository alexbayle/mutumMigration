<?php

namespace Mutum\Bundle\V1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozUser
 *
 * @ORM\Table(name="poz_user", uniqueConstraints={@ORM\UniqueConstraint(name="poz_user_user_email", columns={"user_email"})})
 * @ORM\Entity
 */
class PozUser
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
     * @ORM\Column(name="user_email", type="string", length=120, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_firstname", type="string", length=60, nullable=false)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastname", type="string", length=60, nullable=false)
     */
    private $userLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=30, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_admin", type="string", length=1, nullable=false)
     */
    private $userAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_manager", type="string", length=1, nullable=false)
     */
    private $userManager;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=60, nullable=false)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_zip", type="string", length=5, nullable=false)
     */
    private $userZip;

    /**
     * @var string
     *
     * @ORM\Column(name="user_city", type="string", length=40, nullable=false)
     */
    private $userCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_birthdate", type="string", length=10, nullable=false)
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
     * @ORM\Column(name="user_phone", type="string", length=30, nullable=false)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone_hide", type="string", length=1, nullable=false)
     */
    private $userPhoneHide;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sponsor_code", type="string", length=8, nullable=false)
     */
    private $userSponsorCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_godfather", type="integer", nullable=false)
     */
    private $userGodfather;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mangopay_id", type="integer", nullable=false)
     */
    private $userMangopayId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_latitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $userLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="user_longitude", type="decimal", precision=18, scale=14, nullable=false)
     */
    private $userLongitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_credit", type="integer", nullable=false)
     */
    private $userCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_score", type="integer", nullable=false)
     */
    private $userScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_nb_notation", type="integer", nullable=false)
     */
    private $userNbNotation;

    /**
     * @var float
     *
     * @ORM\Column(name="user_notation", type="float", precision=10, scale=0, nullable=false)
     */
    private $userNotation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_creation", type="datetime", nullable=false)
     */
    private $userCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_lastconnexion", type="datetime", nullable=false)
     */
    private $userLastconnexion;

    /**
     * @var string
     *
     * @ORM\Column(name="user_actif", type="string", length=32, nullable=false)
     */
    private $userActif;



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
     * @return PozUser
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
     * @return PozUser
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
     * @return PozUser
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
     * @return PozUser
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

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
     * @param string $userAdmin
     * @return PozUser
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return string 
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set userManager
     *
     * @param string $userManager
     * @return PozUser
     */
    public function setUserManager($userManager)
    {
        $this->userManager = $userManager;

        return $this;
    }

    /**
     * Get userManager
     *
     * @return string 
     */
    public function getUserManager()
    {
        return $this->userManager;
    }

    /**
     * Set userAddress
     *
     * @param string $userAddress
     * @return PozUser
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Get userAddress
     *
     * @return string 
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userZip
     *
     * @param string $userZip
     * @return PozUser
     */
    public function setUserZip($userZip)
    {
        $this->userZip = $userZip;

        return $this;
    }

    /**
     * Get userZip
     *
     * @return string 
     */
    public function getUserZip()
    {
        return $this->userZip;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     * @return PozUser
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string 
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set userBirthdate
     *
     * @param string $userBirthdate
     * @return PozUser
     */
    public function setUserBirthdate($userBirthdate)
    {
        $this->userBirthdate = $userBirthdate;

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
     * @return PozUser
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
     * @return PozUser
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
     * @param string $userPhoneHide
     * @return PozUser
     */
    public function setUserPhoneHide($userPhoneHide)
    {
        $this->userPhoneHide = $userPhoneHide;

        return $this;
    }

    /**
     * Get userPhoneHide
     *
     * @return string 
     */
    public function getUserPhoneHide()
    {
        return $this->userPhoneHide;
    }

    /**
     * Set userSponsorCode
     *
     * @param string $userSponsorCode
     * @return PozUser
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
     * Set userGodfather
     *
     * @param integer $userGodfather
     * @return PozUser
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
     * @return PozUser
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
     * Set userLatitude
     *
     * @param string $userLatitude
     * @return PozUser
     */
    public function setUserLatitude($userLatitude)
    {
        $this->userLatitude = $userLatitude;

        return $this;
    }

    /**
     * Get userLatitude
     *
     * @return string 
     */
    public function getUserLatitude()
    {
        return $this->userLatitude;
    }

    /**
     * Set userLongitude
     *
     * @param string $userLongitude
     * @return PozUser
     */
    public function setUserLongitude($userLongitude)
    {
        $this->userLongitude = $userLongitude;

        return $this;
    }

    /**
     * Get userLongitude
     *
     * @return string 
     */
    public function getUserLongitude()
    {
        return $this->userLongitude;
    }

    /**
     * Set userCredit
     *
     * @param integer $userCredit
     * @return PozUser
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
     * Set userScore
     *
     * @param integer $userScore
     * @return PozUser
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
     * Set userNbNotation
     *
     * @param integer $userNbNotation
     * @return PozUser
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
     * @return PozUser
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
     * Set userCreation
     *
     * @param \DateTime $userCreation
     * @return PozUser
     */
    public function setUserCreation($userCreation)
    {
        $this->userCreation = $userCreation;

        return $this;
    }

    /**
     * Get userCreation
     *
     * @return \DateTime 
     */
    public function getUserCreation()
    {
        return $this->userCreation;
    }

    /**
     * Set userLastconnexion
     *
     * @param \DateTime $userLastconnexion
     * @return PozUser
     */
    public function setUserLastconnexion($userLastconnexion)
    {
        $this->userLastconnexion = $userLastconnexion;

        return $this;
    }

    /**
     * Get userLastconnexion
     *
     * @return \DateTime 
     */
    public function getUserLastconnexion()
    {
        return $this->userLastconnexion;
    }

    /**
     * Set userActif
     *
     * @param string $userActif
     * @return PozUser
     */
    public function setUserActif($userActif)
    {
        $this->userActif = $userActif;

        return $this;
    }

    /**
     * Get userActif
     *
     * @return string 
     */
    public function getUserActif()
    {
        return $this->userActif;
    }
}
