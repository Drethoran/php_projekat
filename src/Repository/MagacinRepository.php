<?php

namespace App\Repository;

use App\Entity\Magacin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Magacin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Magacin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Magacin[]    findAll()
 * @method Magacin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MagacinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Magacin::class);
    }

    // /**
    //  * @return Magacin[] Returns an array of Magacin objects
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
    public function findOneBySomeField($value): ?Magacin
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
