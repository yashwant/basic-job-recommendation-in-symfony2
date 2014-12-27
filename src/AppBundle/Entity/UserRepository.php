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
            $newUser->setIndustry($this->addIndustry($profile['industry']));
        }
        if (array_key_exists('location', $profile) && is_array($profile['location']) && array_key_exists('name', $profile['location'])) {
            $newUser->setLocation($this->addLocation($profile['location']['name']));
        }
        if (array_key_exists('pictureUrl', $profile) && $profile['pictureUrl']) {
            $newUser->setPictureUrl($profile['pictureUrl']);
        }
        if (array_key_exists('summary', $profile) && $profile['summary']) {
            $newUser->setSummary($profile['summary']);
        }

        if (
                array_key_exists('threeCurrentPositions', $profile) && is_array($profile['threeCurrentPositions']) && array_key_exists('_total', $profile['threeCurrentPositions']) && $profile['threeCurrentPositions']['_total']) {
            $newUser->setCurrentCompany($this->addCompany($profile['threeCurrentPositions']['values'][0]['company']['name']));
            $newUser->setPosition($profile['threeCurrentPositions']['values'][0]['title']);
        }
        $newUser->setExperience($this->getExperience($profile));

        $em->persist($newUser);
        $em->flush();
        try {

            return $newUser;
        } catch (\Exception $e) {
            $e->getCode();
            //echo $e->getTraceAsString();

            return false;
        }
    }

    /**
     * 
     * @param array $profile
     * @return int
     */
    private function getExperience($profile)
    {
        
        if (
                array_key_exists('threePastPositions', $profile) && array_key_exists('_total', $profile['threePastPositions']) && $profile['threePastPositions']['_total']) {
            $cnt = $profile['threePastPositions']['_total'];
            $start = 0;
            while ($cnt > 0) {
                if (array_key_exists('startDate', $profile['threePastPositions']['values'][$cnt - 1]) && array_key_exists('year', $profile['threePastPositions']['values'][$cnt - 1]['startDate'])) {
                    $start = $profile['threePastPositions']['values'][$cnt - 1]['startDate']['year'];
                    break;
                }
            }
        }
        if (
                !$start && array_key_exists('threeCurrentPositions', $profile) && array_key_exists('_total', $profile['threeCurrentPositions']) && $profile['threeCurrentPositions']['_total']) {
            $cnt = $profile['threeCurrentPositions']['_total'];
            $start = 0;
            while ($cnt > 0) {
                if (array_key_exists('startDate', $profile['threeCurrentPositions']['values'][$cnt - 1]) && array_key_exists('year', $profile['threeCurrentPositions']['values'][$cnt - 1]['startDate'])) {
                    $start = $profile['threeCurrentPositions']['values'][$cnt - 1]['startDate']['year'];
                    break;
                }
            }
        }

        if ($start) {
            return ((int) date("Y") - (int) $start) > 0 ? ((int) date("Y") - (int) $start) : 0;
        } else {
            return 0;
        }
    }

    /**
     * 
     * @param string $locationName
     * @return boolean|\AppBundle\Entity\Location
     */
    public function addLocation($locationName)
    {

        $em = $this->getEntityManager();
        $entity = $em->getRepository('AppBundle:Location')->findOneBy(array('name' => $locationName));
        if ($entity) {
            return $entity;
        }
        try {
            $newlocation = new Location();
            $newlocation->setName($locationName);
            $em->persist($newlocation);
            $em->flush();
            $em->clear();
            return $newlocation;
        } catch (\Exception $e) {
            $e->getCode();
//            echo $e->getTraceAsString();

            return false;
        }
    }

    /**
     * 
     * @param string $industry
     * @return boolean|\AppBundle\Entity\Industry
     */
    public function addIndustry($industry)
    {

        $em = $this->getEntityManager();
        $entity = $em->getRepository('AppBundle:Industry')->findOneBy(array('name' => $industry));
        if ($entity) {
            return $entity;
        }
        try {
            $newIndustry = new Industry();
            $newIndustry->setName($industry);
            $em->persist($newIndustry);
            $em->flush();
            $em->clear();
            return $newIndustry;
        } catch (\Exception $e) {
            $e->getCode();
//            echo $e->getTraceAsString();

            return false;
        }
    }

    /**
     * 
     * @param string $company
     * @return boolean|\AppBundle\Entity\Company
     */
    public function addCompany($company)
    {

        $em = $this->getEntityManager();
        $entity = $em->getRepository('AppBundle:Company')->findOneBy(array('name' => $company));
        if ($entity) {
            return $entity;
        }
        try {
            $newCompany = new Company();
            $newCompany->setName($company);
            $em->persist($newCompany);
            $em->flush();
            $em->clear();
            return $newCompany;
        } catch (\Exception $e) {
            $e->getCode();
//            echo $e->getTraceAsString();

            return false;
        }
    }

}
