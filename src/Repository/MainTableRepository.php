<?php

namespace App\Repository;

use App\Entity\MainTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MainTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainTable[]    findAll()
 * @method MainTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MainTable::class);
    }

    // /**
    //  * @return MainTable[] Returns an array of MainTable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MainTable
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
