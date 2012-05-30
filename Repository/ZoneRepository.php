<?php

namespace Ikimea\PageBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ZoneRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ZoneRepository extends EntityRepository
{
    public function getArea($name, $culture, $slug)
    {

       $hydrationMode = 1;

       $result =  $this->createQueryBuilder('z')
            ->select('z, c, p.id')
            ->leftJoin('z.components', 'c', 'c.zone_id = z.id')
            ->leftJoin('z.page', 'p')
            ->where('z.name = :parent')
            ->Andwhere('p.slug = :slug')
            ->Andwhere('z.culture = :culture')
            ->setParameter('parent',$name)
            ->setParameter('culture',$culture)
            ->setParameter('slug',$slug)
            ->getQuery();

        $result = $result->execute(array(), 1);

        if ( ! $result) {
            return false;
        }

        if ( ! is_array($result)) {
            return $result;
        }

        if (count($result) > 1) {
            return true;
        }

        return array_shift($result);

    }

}