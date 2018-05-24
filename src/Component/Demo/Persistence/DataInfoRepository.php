<?php

namespace App\Component\Demo\Persistence;

use App\Component\Demo\Persistence\DataInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DataInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataInfo[]    findAll()
 * @method DataInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataInfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DataInfo::class);
    }

//    /**
//     * @return DataInfo[] Returns an array of DataInfo objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DataInfo
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
