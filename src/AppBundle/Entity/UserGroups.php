<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroups
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserGroupsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UserGroups
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
     * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=false)
     * 
     */
    private $user;

    /**
     * @var \AppBundle\Entity\LinkedinGroup
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\LinkedinGroup")
     * @ORM\JoinColumn(name="ligroup", referencedColumnName="id", nullable=false)
     */
    private $group;

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
    function getUser()
    {
        return $this->user;
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return \AppBundle\Entity\UserGroups
     */
    function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getGroup()
    {
        return $this->group;
    }

    /**
     * 
     * @param \AppBundle\Entity\LinkedinGroup $group
     * @return \AppBundle\Entity\UserGroups
     */
    function setGroup(\AppBundle\Entity\LinkedinGroup $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Set createdOnTime
     *
     * @param \DateTime $createdOnTime
     *
     * @return JobSkills
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
