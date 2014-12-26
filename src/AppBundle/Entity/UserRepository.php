<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * UserRepository
 *
 */
class UserRepository extends EntityRepository
{

    public function addNew($profile)
    {

//                echo $profile['firstName'];
//        echo $profile['lastName'];
//        echo $profile['headline'];
//        echo $profile['industry'];
//exit();
        $em = $this->getEntityManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(array('linkedinId' => $profile['id']));
        if ($user) {
            return $user;
        }
        $newUser = new User();
        $newUser->setLinkedinId($profile['id']);
        if (array_key_exists('email', $profile) && $profile['email']) {
            $newUser->setEmail($profile['email']);
        }
        if (array_key_exists('firstName', $profile) && $profile['firstName']) {
            $newUser->setFirstName($profile['firstName']);
        }
        if (array_key_exists('lastName', $profile) && $profile['lastName']) {
            $newUser->setLastName($profile['lastName']);
        }
        if (array_key_exists('headline', $profile) && $profile['headline']) {
            $newUser->setHeadline($profile['headline']);
        }
        if (array_key_exists('industry', $profile) && $profile['industry']) {
            $newUser->setIndustry($profile['industry']);
        }
        if (array_key_exists('pictureUrl', $profile) && $profile['pictureUrl']) {
            $newUser->setPictureUrl($profile['pictureUrl']);
        }
        if (array_key_exists('summary', $profile) && $profile['summary']) {
            $newUser->setSummary($profile['summary']);
        }

        try {
            $em->persist($newUser);
            $em->flush();

            return $newUser;
        } catch (\Exception $e) {
            $e->getCode();
            //echo $e->getTraceAsString();

            return false;
        }
    }

}
