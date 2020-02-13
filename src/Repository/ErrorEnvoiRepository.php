<?php

namespace App\Repository;

use App\Entity\ErrorEnvoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ErrorEnvoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErrorEnvoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErrorEnvoi[]    findAll()
 * @method ErrorEnvoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErrorEnvoiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ErrorEnvoi::class);
    }

    // /**
    //  * @return ErrorEnvoi[] Returns an array of ErrorEnvoi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ErrorEnvoi
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
