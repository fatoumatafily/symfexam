<?php

namespace App\Repository;

use App\Entity\session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method session|null find($id, $lockMode = null, $lockVersion = null)
 * @method session|null findOneBy(array $criteria, array $orderBy = null)
 * @method session[]    findAll()
 * @method session[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class sessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, session::class);
    }

    // /**
    //  * @return session[] Returns an array of session objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?session
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
