<?php

namespace App\Repository;

use App\Entity\UserAnswersPresent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserAnswersPresent>
 *
 * @method UserAnswersPresent|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserAnswersPresent|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserAnswersPresent[]    findAll()
 * @method UserAnswersPresent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserAnswersPresentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserAnswersPresent::class);
    }

//    /**
//     * @return UserAnswersPresent[] Returns an array of UserAnswersPresent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UserAnswersPresent
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
