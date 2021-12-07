<?php

namespace App\Repository;

use App\Entity\CollectionWine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CollectionWine|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollectionWine|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollectionWine[]    findAll()
 * @method CollectionWine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollectionWineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollectionWine::class);
    }


    // /**
    //  * @return CollectionWine[] Returns an array of CollectionWine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CollectionWine
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
