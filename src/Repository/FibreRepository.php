<?php

namespace App\Repository;

use App\Entity\Fibre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fibre>
 *
 * @method Fibre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fibre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fibre[]    findAll()
 * @method Fibre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FibreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fibre::class);
    }

    //    /**
    //     * @return Fibre[] Returns an array of Fibre objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Fibre
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
