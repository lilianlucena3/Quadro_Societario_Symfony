<?php

namespace App\Repository;

use App\Entity\Pessoas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pessoas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pessoas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pessoas[]    findAll()
 * @method Pessoas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PessoasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pessoas::class);
    }
}
