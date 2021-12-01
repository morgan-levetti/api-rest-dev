<?php

namespace App\Repository;

use App\Entity\WineWhite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WineWhite|null find($id, $lockMode = null, $lockVersion = null)
 * @method WineWhite|null findOneBy(array $criteria, array $orderBy = null)
 * @method WineWhite[]    findAll()
 * @method WineWhite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WineWhiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WineWhite::class);
    }

    // /**
    //  * @return WineWhite[] Returns an array of WineWhite objects
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
    public function findOneBySomeField($value): ?WineWhite
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
