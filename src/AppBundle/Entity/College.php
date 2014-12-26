<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * College
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class College
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * Get name
     * 
     * @return type
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     * 
     * @param type $name
     * 
     * @return College
     */
    public function setName($name)
    {
        $this->firstName = $name;

        return $this;
    }

    /**
     * Set createdOnTime
     *
     * @param \DateTime $createdOnTime
     *
     * @return College
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
