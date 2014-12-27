<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * IndustryRepository
 *
 */
class IndustryRepository extends EntityRepository
{

    /**
     * 
     * 
     * @param \AppBundle\Entity\Industry $industry
     * @param integer $limit limit on number of results
     * @return type
     */
    public function getIndustriesSimDist(Industry $industry, $limit = 3)
    {
        
        return array();
    }
}
