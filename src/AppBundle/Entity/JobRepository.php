<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * JobRepository
 *
 */
class JobRepository extends EntityRepository
{

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return type
     */
    public function filterJobs(User $user)
    {

        return $this->filter1jobs($user);
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @return type
     */
    public function filter1jobs(User $user)
    {

        $sql = " 
            SELECT 
                Job.id as id,
                Job.minExp as minExp,
                Job.maxExp as maxExp,
                JobSkills.id as jobskillid, 
                Job.title as title,
                Job.description as description
            FROM `Job` 
            LEFT JOIN 
                JobSkills 
                ON ( JobSkills.job = Job.id )
            INNER JOIN 
                UserSkills 
                ON ( UserSkills.skill = JobSkills.skill AND UserSkills.user = " . $user->getId() . " )
            WHERE 
                1 
            GROUP BY Job.id
            ORDER BY Job.id
        ";

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
