<?php

namespace App\Repository;

use App\Entity\UserMoviesList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserMoviesList|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserMoviesList|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserMoviesList[]    findAll()
 * @method UserMoviesList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserMoviesListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserMoviesList::class);
    }

    // /**
    //  * @return UserMoviesList[] Returns an array of UserMoviesList objects
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
    public function findOneBySomeField($value): ?UserMoviesList
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
