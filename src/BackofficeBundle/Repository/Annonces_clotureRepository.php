<?php

namespace BackofficeBundle\Repository;

/**
 * Annonces_clotureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Annonces_clotureRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllUser($email) {

        /*$conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM annonces_cloture WHERE publierpar like "'.$email.'"';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();*/
        
        
        $liste=$this->createQueryBuilder('av')
                ->select("av.id,av.adresse,av.codePostal,av.complementAdresse,av.typeannonce,av.datepublication,av.ville,av.villeDuGreffe,av.societe,av.formeJurique,av.capital,av.nrcs,av.typeAssemblee,av.typeAssemble2,av.dateAssemblee,av.dateEffet,av.publierpar")
                ->where("av.publierpar like '".$email."'")
                ->getQuery()
                ->getResult();
        return $liste;
    }

}
