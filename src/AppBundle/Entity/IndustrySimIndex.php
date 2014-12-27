<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndustrySimIndex
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class IndustrySimIndex
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
     * @var \AppBundle\Entity\Industry
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Industry")
     * @ORM\JoinColumn(name="industry1", referencedColumnName="id", nullable=false)
     * 
     */
    private $industry1;

    /**
     * @var \AppBundle\Entity\Industry
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Industry")
     * @ORM\JoinColumn(name="industry2", referencedColumnName="id", nullable=false)
     * 
     */
    private $industry2;

    /**
     * @var integer
     *
     * @ORM\Column(name="index", type="integer")
     * 
     */
    private $index;

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

    function getIndustry1()
    {
        return $this->industry1;
    }

    function setIndustry1(\AppBundle\Entity\Industry $industry1)
    {
        $this->industry1 = $industry1;
    }

    function getIndustry2()
    {
        return $this->industry2;
    }

    function setIndustry2(\AppBundle\Entity\Industry $industry2)
    {
        $this->industry2 = $industry2;
    }

    function getIndex()
    {
        return $this->index;
    }

    function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * Set createdOnTime
     *
     * @param \DateTime $createdOnTime
     *
     * @return PositionSimIndex
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
