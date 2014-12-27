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
        /* this one is just for test purpose */
        return $this->filter1jobs($user);
        //return $this->filter2jobs($user);
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
                Job.description as description,
                Job.location as location,
                Job.industry as industry
            FROM `Job` 
            LEFT JOIN 
                JobSkills 
                ON ( JobSkills.job = Job.id )
            INNER JOIN 
                UserSkills 
                ON ( UserSkills.skill = JobSkills.skill AND UserSkills.user = " . $user->getId() . " )
            INNER JOIN 
                UserAlumniCompWeight 
                ON ( UserAlumniCompWeight.company = Job.company AND UserAlumniCompWeight.user = " . $user->getId() . " )
            INNER JOIN 
                UserGroupJobWeight 
                ON ( UserGroupJobWeight.job = Job.id AND UserGroupJobWeight.user = " . $user->getId() . " )
            WHERE 
                ( " . $user->getExperience() . " >= Job.minExp AND " . $user->getExperience() . " <= Job.maxExp )
            GROUP BY Job.id
            ORDER BY Job.id
        ";

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @param type $weight
     */
    private function getIndustriesScoreFun(User $user, $weight)
    {
        $em = $this->getEntityManager();
        $industries = $em->getRepository('AppBundle:Industry')->getIndustriesSimDist($user->getIndustry());

        $ret = '';
        foreach ($industries as $industry) {
            $ret.="( CASE WHEN Job.industry = " . $industry['id'] . " THEN " . $industry['weight'] . " * " . $weight . "";
        }
        $ret.=" ELSE 0 END )";
    }

    /**
     * 
     * @param \AppBundle\Entity\User $user
     * @param type $weight
     */
    private function getLocationScoreFun(User $user, $weight)
    {
        $em = $this->getEntityManager();
        $locations = $em->getRepository('AppBundle:Location')->getLocationSimDist($user->getLocation());

        $ret = '';
        foreach ($locations as $location) {
            $ret.="( CASE WHEN Job.location = " . $location['id'] . " THEN " . $location['weight'] . " * " . $weight . "";
        }
        $ret.=" ELSE 0 END )";
    }

    /**
     * @todo Not Completed yet
     * 
     * @param \AppBundle\Entity\User $user
     * @return type
     */
    public function filter2jobs(User $user)
    {

        $weight_industry = 1000;
        $weight_experience = 100;
        $weight_location = 50;
        $weight_alumni = 10;
        $weight_groups = 5;

        /* NOT COMPLETED YET */
        $sql = " 
            SELECT 
                Job.id as id,
                Job.minExp as minExp,
                Job.maxExp as maxExp,
                JobSkills.id as jobskillid, 
                Job.title as title,
                Job.description as description,
                Job.location as location,
                Job.industry as industry,
                (0 + 
                        ((" . $user->getExperience() . " - Job.minExp)/(Job.maxExp-Job.minExp)) * " . $weight_experience . " +
                        UserAlumniCompWeight.weight * " . $weight_alumni . " +
                        UserGroupJobWeight.weight * " . $weight_groups . " + 
                        " . $this->getIndustriesScoreFun($user, $weight_industry) . " +
                        " . $this->getLocationScoreFun($user, $weight_location) . " 
                ) as score
            FROM `Job` 
            LEFT JOIN 
                JobSkills 
                ON ( JobSkills.job = Job.id )
            INNER JOIN 
                UserSkills 
                ON ( UserSkills.skill = JobSkills.skill AND UserSkills.user = " . $user->getId() . " )
            INNER JOIN 
                UserAlumniCompWeight 
                ON ( UserAlumniCompWeight.company = Job.company AND UserAlumniCompWeight.user = " . $user->getId() . " )
            INNER JOIN 
                UserGroupJobWeight 
                ON ( UserGroupJobWeight.job = Job.id AND UserGroupJobWeight.user = " . $user->getId() . " )
            WHERE 
                ( " . $user->getExperience() . " >= Job.minExp AND " . $user->getExperience() . " <= Job.maxExp )
            GROUP BY Job.id
            ORDER BY score DESC
        ";

        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
