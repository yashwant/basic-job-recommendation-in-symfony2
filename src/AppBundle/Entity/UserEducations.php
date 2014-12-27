<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEducations
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserEducationsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UserEducations
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
     * @ORM\Column(name="linkedinId", type="string", length=128, nullable=true)
     */
    private $linkedinId;

    /**
     * @var \AppBundle\Entity\College
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\College", cascade={"persist"})
     * @ORM\JoinColumn(name="college", referencedColumnName="id", nullable=false)
     * 
     */
    private $college;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="degree", type="string", length=512, nullable=true)
     */
    private $degree;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldOfStudy", type="string", length=512, nullable=true)
     */
    private $fieldOfStudy;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=512, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=true)
     */
    private $endDate;

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

    function getLinkedinId()
    {
        return $this->linkedinId;
    }

    function setLinkedinId($linkedinId)
    {
        $this->linkedinId = $linkedinId;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getCollege()
    {
        return $this->college;
    }

    /**
     * 
     * @param \AppBundle\Entity\College $college
     * @return \AppBundle\Entity\UserEducations
     */
    public function setCollege(\AppBundle\Entity\College $college)
    {
        $this->college = $college;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return \AppBundle\Entity\UserEducations
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * 
     * @param type $degree
     * @return \AppBundle\Entity\UserEducations
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getFieldOfStudy()
    {
        return $this->fieldOfStudy;
    }

    /**
     * 
     * @param type $fieldOfStudy
     * @return \AppBundle\Entity\UserEducations
     */
    public function setFieldOfStudy($fieldOfStudy)
    {
        $this->fieldOfStudy = $fieldOfStudy;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * 
     * @param type $notes
     * @return \AppBundle\Entity\UserEducations
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * 
     * @param \DateTime $startDate
     * @return \AppBundle\Entity\UserEducations
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * 
     * @param \DateTime $endDate
     * @return \AppBundle\Entity\UserEducations
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

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
