<?php

namespace App\Repository;

use App\Entity\BlogCategoryy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BlogCategoryy|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogCategoryy|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogCategoryy[]    findAll()
 * @method BlogCategoryy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogCategoryyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogCategoryy::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(BlogCategoryy $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(BlogCategoryy $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return BlogCategoryy[] Returns an array of BlogCategoryy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogCategoryy
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
