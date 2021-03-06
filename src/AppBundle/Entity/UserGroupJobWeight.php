<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroupJobWeight
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class UserGroupJobWeight
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=true)
     * 
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Job
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Job")
     * @ORM\JoinColumn(name="job", referencedColumnName="id", nullable=false)
     * 
     */
    private $job;

    /**
     * @var decimal
     *
     * @ORM\Column(type="decimal", scale=3)
     */
    private $weight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdatedOn", type="datetime")
     */
    private $lastUpdatedOn;

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
    function getUser()
    {
        return $this->user;
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return \AppBundle\Entity\UserGroupJobWeight
     */
    function setUser(AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getJob()
    {
        return $this->job;
    }

    /**
     * 
     * @param \AppBundle\Entity\Job $job
     * @return \AppBundle\Entity\UserGroupJobWeight
     */
    function setJob(\AppBundle\Entity\Job $job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getWeight()
    {
        return $this->weight;
    }

    /**
     * 
     * @param type $weight
     * @return \AppBundle\Entity\UserGroupJobWeight
     */
    function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Set lastUpdatedOn
     *
     * @param \DateTime $lastUpdatedOn
     *
     * @return 
     */
    public function setLastUpdatedOn($lastUpdatedOn)
    {
        $this->lastUpdatedOn = $lastUpdatedOn;

        return $this;
    }

    /**
     * Get lastUpdatedOn
     *
     * @return \DateTime 
     */
    public function getLastUpdatedOn()
    {
        return $this->lastUpdatedOn;
    }

    /**
     * update time
     * 
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * 
     */
    public function updatedTimestamps()
    {
        if ($this->getLastUpdatedOn() == null) {
            $this->setLastUpdatedOn(new \DateTime(gmdate('Y-m-d H:i:s')));
        }
    }

}
