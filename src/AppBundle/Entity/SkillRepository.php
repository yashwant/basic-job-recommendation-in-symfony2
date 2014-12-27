<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SkillRepository
 *
 */
class SkillRepository extends EntityRepository
{

    public function add($skillRaw)
    {

        $skillName = $skillRaw['skill']['name'];
        $em = $this->getEntityManager();
        $skill = $em->getRepository('AppBundle:Skill')->findOneBy(array('name' => $skillName));
        if ($skill) {
            return $skill;
        }
        $newSkill = new Skill();
        $newSkill->setName($skillName);

        try {
            $em->persist($newSkill);
            $em->flush();

            return $newSkill;
        } catch (\Exception $e) {
            $e->getCode();
            //echo $e->getTraceAsString();

            return false;
        }
    }

    /**
     * 
     * @param array $skills
     * @param \AppBundle\Entity\User $user
     * @return boolean
     */
    public function bulkAdd($skills, User $user)
    {

//        echo 'Bulk Add: '. count($skills['values']);
        $em = $this->getEntityManager();

        try {
            foreach ($skills['values'] as $skl) {
                $skll = $this->add($skl);
                $usrskl = $em->getRepository('AppBundle:UserSkills')->findOneBy(array('skill' => $skll->getId(), 'user' => $user->getId()));
                if (!$usrskl) {
                    $newuserSkill = new UserSkills();
                    $sklRef = $em->getRepository('AppBundle:Skill')->find($skll->getId());
                    $userRef = $em->getRepository('AppBundle:User')->find($user->getId());
                    $newuserSkill->setSkill($sklRef);
                    $newuserSkill->setUser($userRef);
                    $em->persist($newuserSkill);
                    $em->flush();
                    $em->clear();
//                    echo 'new User skill already added';
                } else {
//                    echo 'User skill already added';
                }
            }
            return true;
        } catch (\Exception $e) {
            $e->getCode();
            //echo $e->getTraceAsString();

            return false;
        }
    }

}
