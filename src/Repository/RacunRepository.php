<?php

namespace App\Repository;

use App\Entity\Racun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Racun|null find($id, $lockMode = null, $lockVersion = null)
 * @method Racun|null findOneBy(array $criteria, array $orderBy = null)
 * @method Racun[]    findAll()
 * @method Racun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RacunRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Racun::class);
    }

    // /**
    //  * @return Racun[] Returns an array of Racun objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Racun
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
