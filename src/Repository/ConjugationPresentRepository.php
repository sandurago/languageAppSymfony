<?php

namespace App\Repository;

use App\Entity\ConjugationPresent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConjugationPresent>
 *
 * @method ConjugationPresent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConjugationPresent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConjugationPresent[]    findAll()
 * @method ConjugationPresent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConjugationPresentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConjugationPresent::class);
    }

//    /**
//     * @return ConjugationPresent[] Returns an array of ConjugationPresent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ConjugationPresent
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
