<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 * @UniqueEntity(fields={"linkedinId"}, message="linkedin Id already exist" ) 
 * @ORM\HasLifecycleCallbacks
 */
class User implements \Serializable
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedinId", type="string", length=32, nullable=false)
     */
    private $linkedinId;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="pictureUrl", type="string", length=255, nullable=true)
     */
    private $pictureUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255, nullable=true)
     */
    private $headline;

    /**
     * @var integer
     *
     * @ORM\Column(name="currentCompany", type="integer")
     */
    private $currentCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="college", type="integer")
     */
    private $college;

    
    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=512, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="text", length=512, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=512, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastLoginTime", type="datetime")
     */
    private $lastLoginTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="signupOnTime", type="datetime")
     */
    private $signupOnTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdatedOnTime", type="datetime")
     */
    private $lastUpdatedOnTime;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get first name
     * 
     * @return type
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * get last name
     * 
     * @return type
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set first name
     * 
     * @param type $firstName
     * 
     * @return null
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * set last name
     * 
     * @param type $lastName
     * 
     * @return null
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * 
     * @return type
     */
    public function getLinkedinId()
    {
        return $this->linkedinId;
    }

    /**
     * 
     * @return type
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * 
     * @return type
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getIndustry()
    {
        return $this->industry;
    }

    public function setLinkedinId($linkedinId)
    {
        $this->linkedinId = $linkedinId;
    }

    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
    }

    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function setIndustry($industry)
    {
        $this->industry = $industry;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lastLoginTime
     *
     * @param \DateTime $lastLoginTime
     *
     * @return User
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;

        return $this;
    }

    /**
     * Get lastLoginTime
     *
     * @return \DateTime 
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * Set signupOnTime
     *
     * @param \DateTime $signupOnTime
     *
     * @return User
     */
    public function setSignupOnTime($signupOnTime)
    {
        $this->signupOnTime = $signupOnTime;

        return $this;
    }

    /**
     * Get signupOnTime
     *
     * @return \DateTime 
     */
    public function getSignupOnTime()
    {
        return $this->signupOnTime;
    }

    /**
     * Set lastUpdatedOnTime
     *
     * @param \DateTime $lastUpdatedOnTime
     *
     * @return User
     */
    public function setLastUpdatedOnTime($lastUpdatedOnTime)
    {
        $this->lastUpdatedOnTime = $lastUpdatedOnTime;

        return $this;
    }

    /**
     * Get lastUpdatedOnTime
     *
     * @return \DateTime 
     */
    public function getLastUpdatedOnTime()
    {
        return $this->lastUpdatedOnTime;
    }

    /**
     * serialise
     *
     * @return type
     */
    public function serialize()
    {

        return serialize(array(
            $this->id,
            $this->email,
            $this->lastLoginTime,
            $this->lastUpdatedOnTime,
            $this->signupOnTime,
        ));
    }

    /**
     * unserialise
     *
     * @param type $serialized
     *
     * @return null
     */
    public function unserialize($serialized)
    {
        list (
                $this->id,
                $this->email,
                $this->lastLoginTime,
                $this->lastUpdatedOnTime,
                $this->signupOnTime,
                ) = unserialize($serialized);
    }

    /**
     * update time
     * 
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * 
     * @return null
     */
    public function updatedTimestamps()
    {
        if ($this->getSignupOnTime() == null) {
            $this->setSignupOnTime(new \DateTime(gmdate('Y-m-d H:i:s')));
        }
        if ($this->getLastLoginTime() == null) {
            $this->setLastLoginTime(new \DateTime(gmdate('Y-m-d H:i:s')));
        }
        $this->setLastUpdatedOnTime(new \DateTime(gmdate('Y-m-d H:i:s')));
    }

}
