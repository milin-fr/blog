<?php

namespace App\Repository;

use App\Entity\ArticleParagraph;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleParagraph|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleParagraph|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleParagraph[]    findAll()
 * @method ArticleParagraph[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleParagraphRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleParagraph::class);
    }

    // /**
    //  * @return ArticleParagraph[] Returns an array of ArticleParagraph objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArticleParagraph
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
