<?php

namespace App\Repository;

use App\Entity\Tri;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tri|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tri|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tri[]    findAll()
 * @method Tri[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TriRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tri::class);
    }
    // /**
    //  * @return Tri[] Returns an array of Tri objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tri
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
