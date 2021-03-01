<?php

namespace App\Repository;

use App\Entity\UserCheckPoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserCheckPoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCheckPoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCheckPoint[]    findAll()
 * @method UserCheckPoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCheckPointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCheckPoint::class);
    }

    // /**
    //  * @return UserCheckPoint[] Returns an array of UserCheckPoint objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserCheckPoint
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
