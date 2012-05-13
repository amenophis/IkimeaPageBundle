<?php

namespace Ikimea\PageBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ComponentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
    /*
     *  get page by slug
     */
    public function getPageBySlug($slug){
        return $this->createQueryBuilder('c')
        ->where('c.slug = :slug')
        ->setParameter('slug',$slug)
        ->getQuery()
        ->getSingleResult();
    }
}