<?php

namespace App\Repository;

use App\Entity\UserRaceStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserRaceStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRaceStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRaceStatus[]    findAll()
 * @method UserRaceStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRaceStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRaceStatus::class);
    }

    // /**
    //  * @return UserRaceStatus[] Returns an array of UserRaceStatus objects
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
    public function findOneBySomeField($value): ?UserRaceStatus
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
