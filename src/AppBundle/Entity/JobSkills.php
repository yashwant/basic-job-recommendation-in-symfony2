<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobSkills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\JobSkillsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class JobSkills
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
     * @var \AppBundle\Entity\Job
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Job")
     * @ORM\JoinColumn(name="job", referencedColumnName="id", nullable=false)
     * 
     */
    private $job;

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
     * @return \AppBundle\Entity\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * 
     * @param \AppBundle\Entity\Job $job
     * @return \AppBundle\Entity\JobSkills
     */
    public function setJob($job)
    {
        $this->job = $job;

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
     * @return \AppBundle\Entity\JobSkills
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
