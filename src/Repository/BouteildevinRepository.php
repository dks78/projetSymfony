<?php

namespace App\Repository;

use App\Entity\Bouteildevin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bouteildevin>
 *
 * @method Bouteildevin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bouteildevin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bouteildevin[]    findAll()
 * @method Bouteildevin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BouteildevinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bouteildevin::class);
    }

//    /**
//     * @return Bouteildevin[] Returns an array of Bouteildevin objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bouteildevin
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
