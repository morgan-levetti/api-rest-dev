<?php

namespace App\Repository;

use App\Entity\WineRose;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WineRose|null find($id, $lockMode = null, $lockVersion = null)
 * @method WineRose|null findOneBy(array $criteria, array $orderBy = null)
 * @method WineRose[]    findAll()
 * @method WineRose[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WineRoseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WineRose::class);
    }

    // /**
    //  * @return WineRose[] Returns an array of WineRose objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WineRose
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
