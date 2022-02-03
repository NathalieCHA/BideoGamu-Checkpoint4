<?php

namespace App\Repository;

use App\Entity\Videogames;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Videogames|null find($id, $lockMode = null, $lockVersion = null)
 * @method Videogames|null findOneBy(array $criteria, array $orderBy = null)
 * @method Videogames[]    findAll()
 * @method Videogames[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideogamesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Videogames::class);
    }

    public function findTheLastSix()
    {
        $query = $this->createQueryBuilder('vid')
        ->orderBy('vid.id','DESC')
        ->setMaxResults(3)
        ->getQuery();

        return $query->getResult();
    }

    public function findLikeName(string $name)
    {
    $queryBuilder = $this->createQueryBuilder('v')
        ->where('v.name LIKE :name')
        ->setParameter('name', '%' . $name . '%')
        ->orderBy('v.name', 'ASC')
        ->getQuery();

    return $queryBuilder->getResult();
    }

    // /**
    //  * @return Videogames[] Returns an array of Videogames objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Videogames
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
