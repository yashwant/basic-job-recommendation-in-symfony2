<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkedinGroup
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class LinkedinGroup
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
     * @ORM\Column(name="linkedinId", type="string", length=255, nullable=false)
     */
    private $linkedinId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=1024, nullable=true)
     */
    private $description;

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
     * @return LinkedinGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * 
     * @return type
     */
    function getLinkedinId()
    {
        return $this->linkedinId;
    }

    /**
     * 
     * @param type $linkedinId
     * @return \AppBundle\Entity\LinkedinGroup
     */
    function setLinkedinId($linkedinId)
    {
        $this->linkedinId = $linkedinId;

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
     * @return \AppBundle\Entity\LinkedinGroup
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
     * @return LinkedinGroup
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
