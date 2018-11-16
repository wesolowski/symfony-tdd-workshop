<?php

namespace App\Component\Price\Persistence;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PriceInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method PriceInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method PriceInfo[]    findAll()
 * @method PriceInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriceInfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PriceInfo::class);
    }
}
