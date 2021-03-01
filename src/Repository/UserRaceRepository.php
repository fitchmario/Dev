<?php

namespace App\Repository;

use App\Entity\UserRace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserRace|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRace|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRace[]    findAll()
 * @method UserRace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRace::class);
    }

    // /**
    //  * @return UserRace[] Returns an array of UserRace objects
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
    public function findOneBySomeField($value): ?UserRace
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
