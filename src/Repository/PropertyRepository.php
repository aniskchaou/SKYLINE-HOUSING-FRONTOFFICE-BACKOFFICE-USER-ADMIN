<?php

namespace App\Repository;

use App\Entity\Property;
use App\Entity\PropertySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

 
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    public function findNotSold()
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.sold = false')
        ->getQuery()
        ->getResult();
    }

    public function findPagination(PropertySearch $search):Query
    {
        $query= $this->createQueryBuilder('p')
        ->andWhere('p.sold = false');

        if($search->getMaxPrice())
        {
            $query=$query->andWhere('p.price <= :maxprice')->setParameter(':maxprice',$search->getMaxPrice());
        }

        if($search->getMinSurface())
        {
            $query=$query->andWhere('p.price >= :minsurface')->setParameter(':minsurface',$search->getMinSurface());
        }
        
        return $query->getQuery();
    }

    public function findAllPagination():Query
    {
        $query= $this->createQueryBuilder('p')
        ->andWhere('p.sold = false');

        return $query->getQuery();
    }

    public function findLastest()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.sold = false')
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

}
