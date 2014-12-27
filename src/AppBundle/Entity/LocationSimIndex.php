<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationSimIndex
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class LocationSimIndex
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
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\LocationSimIndex")
     * @ORM\JoinColumn(name="location1", referencedColumnName="id", nullable=false)
     * 
     */
    private $location1;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Location")
     * @ORM\JoinColumn(name="location2", referencedColumnName="id", nullable=false)
     * 
     */
    private $location2;

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

    function getLocation1()
    {
        return $this->location1;
    }

    function getLocation2()
    {
        return $this->location2;
    }

    function getIndex()
    {
        return $this->index;
    }

    function setLocation1(\AppBundle\Entity\Location $location1)
    {
        $this->location1 = $location1;
    }

    function setLocation2(\AppBundle\Entity\Location $location2)
    {
        $this->location2 = $location2;
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
