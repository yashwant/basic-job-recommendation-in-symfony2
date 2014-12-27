<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\JobRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Job
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="minExp", type="integer")
     */
    private $minExp;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxExp", type="integer")
     */
    private $maxExp;

    /**
     * @var \AppBundle\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Company")
     * @ORM\JoinColumn(name="company", referencedColumnName="id", nullable=true)
     * 
     */
    private $company;

    /**
     * @var \AppBundle\Entity\Industry
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Industry")
     * @ORM\JoinColumn(name="industry", referencedColumnName="id", nullable=true)
     * 
     */
    private $industry;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Location")
     * @ORM\JoinColumn(name="location", referencedColumnName="id", nullable=true)
     * 
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdOnTime", type="datetime")
     */
    private $createdOnTime;

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
     * 
     * @return type
     */
    function getTitle()
    {
        return $this->title;
    }

    /**
     * 
     * @param type $title
     * @return \AppBundle\Entity\Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getDescription()
    {
        return $this->description;
    }

    /**
     * 
     * @param type $description
     * @return \AppBundle\Entity\Job
     */
    function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getMinExp()
    {
        return $this->minExp;
    }

    /**
     * 
     * @param type $minExp
     * @return \AppBundle\Entity\Job
     */
    function setMinExp($minExp)
    {
        $this->minExp = $minExp;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getMaxExp()
    {
        return $this->maxExp;
    }

    /**
     * 
     * @param type $maxExp
     * @return \AppBundle\Entity\Job
     */
    function setMaxExp($maxExp)
    {
        $this->maxExp = $maxExp;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getCompany()
    {
        return $this->company;
    }

    /**
     * 
     * @param \AppBundle\Entity\Company $company
     * @return \AppBundle\Entity\Job
     */
    function setCompany(\AppBundle\Entity\Company $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getIndustry()
    {
        return $this->industry;
    }

    /**
     * 
     * @param \AppBundle\Entity\Industry $industry
     * @return \AppBundle\Entity\Job
     */
    function setIndustry(\AppBundle\Entity\Industry $industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getLocation()
    {
        return $this->location;
    }

    /**
     * 
     * @param \AppBundle\Entity\Location $location
     * @return \AppBundle\Entity\Job
     */
    function setLocation(\AppBundle\Entity\Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Set createdOnTime
     *
     * @param \DateTime $createdOnTime
     *
     * @return Job
     */
    public function setCreatedOnTime($createdOnTime)
    {
        $this->createdOnTime = $createdOnTime;

        return $this;
    }

    /**
     * Get createdOnTime
     *
     * @return \DateTime 
     */
    public function getCreatedOnTime()
    {
        return $this->createdOnTime;
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
        if ($this->getCreatedOnTime() == null) {
            $this->setCreatedOnTime(new \DateTime(gmdate('Y-m-d H:i:s')));
        }
    }

}
