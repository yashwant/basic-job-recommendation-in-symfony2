<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserSkillsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UserSkills
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
     * @var \AppBundle\Entity\Skill
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Skill")
     * @ORM\JoinColumn(name="skill", referencedColumnName="id", nullable=false)
     */
    private $skill;

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
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return \AppBundle\Entity\UserSkills
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * 
     * @return \AppBundle\Entity\Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * 
     * @param \AppBundle\Entity\Skill $skill
     * @return \AppBundle\Entity\UserSkills
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Set createdOnTime
     *
     * @param \DateTime $createdOnTime
     *
     * @return UserSkills
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
