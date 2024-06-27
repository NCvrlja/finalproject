<?php

namespace App\Repository;

use App\Entity\Planner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Planner>
 *
 * @method Planner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Planner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Planner[]    findAll()
 * @method Planner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlannerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Planner::class);
    }

   /**
    * @return Planner[] Returns an array of Planner objects
    */
   public function showPlannerForUser($value, $startDate, $endDate): array
   {
       return $this->createQueryBuilder('p')
            ->join("p.fk_user", "u")
            ->join("p.fk_meal", "m")
           ->andWhere('p.fk_user = :val')
           ->andWhere('p.date between :startDate and :endDate')
           ->setParameter('val', $value)
           ->setParameter('startDate', new \DateTime($startDate))
           ->setParameter('endDate', new \DateTime($endDate))
           ->orderBy('p.date', 'ASC')
           ->addOrderBy('p.time_to_eat', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findMaxDate(): ?Planner
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
