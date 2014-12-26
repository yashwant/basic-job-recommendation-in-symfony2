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
     * @var integer
     *
     * @ORM\Column(name="company", type="integer")
     */
    private $company;
    
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
