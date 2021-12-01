<?php

namespace App\Repository;

use App\Entity\WineRed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WineRed|null find($id, $lockMode = null, $lockVersion = null)
 * @method WineRed|null findOneBy(array $criteria, array $orderBy = null)
 * @method WineRed[]    findAll()
 * @method WineRed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WineRedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WineRed::class);
    }

    // /**
    //  * @return WineRed[] Returns an array of WineRed objects
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
    public function findOneBySomeField($value): ?WineRed
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
