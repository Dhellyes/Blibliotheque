<?php

namespace App\Repository;

use App\Entity\Author;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }

    public function save(Author $author, bool $flush = false): void
    {
        $this->getEntityManager()->persist($author);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Author $author, bool $flush = false): void
    {
        $this->getEntityManager()->remove($author);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}

