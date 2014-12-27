<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserGroupsRepository
 *
 */
class UserGroupsRepository extends EntityRepository
{

    /**
     * Check if Linkedin group entity exists if not then add it and 
     * return Linkedin Group Entity else return exsting linkedin entity
     * if adding new entity fails it returns false
     * 
     * @param array $group
     * @return boolean|\AppBundle\Entity\LinkedinGroup
     */
    public function addGroup($group)
    {

        $em = $this->getEntityManager();
        $groupEntity = $em->getRepository('AppBundle:LinkedinGroup')->findOneBy(array('linkedinId' => $group['id']));
        if ($groupEntity) {
            return $groupEntity;
        }
        try {
            $newGroup = new LinkedinGroup();
            $newGroup->setLinkedinId($group['id']);
            if (array_key_exists('name', $group) && $group['name']) {
                $newGroup->setName($group['name']);
            }
            if (array_key_exists('description', $group) && $group['description']) {
                $newGroup->setDescription(html_entity_decode($group['description'], ENT_QUOTES));
            }
            $em->persist($newGroup);
            $em->flush();
            $em->clear();
            return $newGroup;
        } catch (\Exception $e) {
            $e->getCode();
//            echo $e->getTraceAsString();
            return false;
        }
    }

    /**
     * Check if User Linkedin group entity exists if not then add it and 
     * return true else return true
     * if adding new entity fails it returns false
     * 
     * @param array $groups
     * @param \AppBundle\Entity\User $user
     * @return boolean
     */
    public function add($groups, User $user)
    {

        $em = $this->getEntityManager();

        try {
            foreach ($groups['values'] as $gp) {
                $group = $gp['group'];
                $grp = $this->addGroup($group);
                $usrgrp = $em->getRepository('AppBundle:UserGroups')->findOneBy(array('group' => $grp->getId(), 'user' => $user->getId()));
                if (!$usrgrp) {
                    $newuserGroup = new UserGroups();
                    $grpRef = $em->getRepository('AppBundle:LinkedinGroup')->find($grp->getId());
                    $userRef = $em->getRepository('AppBundle:User')->find($user->getId());
                    $newuserGroup->setGroup($grpRef);
                    $newuserGroup->setUser($userRef);
                    $em->persist($newuserGroup);
                    $em->flush();
                    $em->clear();
                } else {
//                    return true;
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
