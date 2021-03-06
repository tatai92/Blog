<?php

namespace Sdz\Bundle\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
    
    

    public function getSelectedCategories(array $selectedCategories)
     {
       $qb = $this->createQueryBuilder('c');
       // On fait une jointure avec l'entité Categorie, avec pour alias « c »
       $qb->where($qb->expr()->in('c.nom', $selectedCategories)); // Puis on filtre sur le nom des catégories à l'aide d'un IN
       // Enfin, on retourne le résultat
       return $qb;
     }
 
}
