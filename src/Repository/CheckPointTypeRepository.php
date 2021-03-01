<?php

namespace App\Repository;

use App\Entity\CheckPointType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CheckPointType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CheckPointType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CheckPointType[]    findAll()
 * @method CheckPointType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CheckPointTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CheckPointType::class);
    }

    // /**
    //  * @return CheckPointType[] Returns an array of CheckPointType objects
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
    public function findOneBySomeField($value): ?CheckPointType
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
