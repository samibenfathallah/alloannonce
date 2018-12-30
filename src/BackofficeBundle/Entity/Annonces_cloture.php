<?php

namespace BackofficeBundle\Entity;

/**
 * Annonces_cloture
 */
class Annonces_cloture
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $villeDuGreffe;

    /**
     * @var string
     */
    private $complementAdresse;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $societe;

    /**
     * @var string
     */
    private $capital;

    /**
     * @var string
     */
    private $formeJurique;

    /**
     * @var string
     */
    private $nrcs;

    /**
     * @var string
     */
    private $typeAssemblee;

    /**
     * @var string
     */
    private $dateAssemblee;

    /**
     * @var string
     */
    private $dateEffet;

    /**
     * @var string
     */
    private $typeAssemble2;

    /**
     * @var string
     */
    private $liquidateur;
    
    /**
     * @var string
     */
    private $typeannonce;
    
    /**
     * @var string
     */
    private $publierpar;

    /**
     * @var string
     */
    private $datepublication;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonces_cloture
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Annonces_cloture
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set villeDuGreffe
     *
     * @param string $villeDuGreffe
     *
     * @return Annonces_cloture
     */
    public function setVilleDuGreffe($villeDuGreffe)
    {
        $this->villeDuGreffe = $villeDuGreffe;

        return $this;
    }

    /**
     * Get villeDuGreffe
     *
     * @return string
     */
    public function getVilleDuGreffe()
    {
        return $this->villeDuGreffe;
    }

    /**
     * Set complementAdresse
     *
     * @param string $complementAdresse
     *
     * @return Annonces_cloture
     */
    public function setComplementAdresse($complementAdresse)
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Get complementAdresse
     *
     * @return string
     */
    public function getComplementAdresse()
    {
        return $this->complementAdresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Annonces_cloture
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Annonces_cloture
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return Annonces_cloture
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set formeJurique
     *
     * @param string $formeJurique
     *
     * @return Annonces_cloture
     */
    public function setFormeJurique($formeJurique)
    {
        $this->formeJurique = $formeJurique;

        return $this;
    }

    /**
     * Get formeJurique
     *
     * @return string
     */
    public function getFormeJurique()
    {
        return $this->formeJurique;
    }

    /**
     * Set nrcs
     *
     * @param string $nrcs
     *
     * @return Annonces_cloture
     */
    public function setNrcs($nrcs)
    {
        $this->nrcs = $nrcs;

        return $this;
    }

    /**
     * Get nrcs
     *
     * @return string
     */
    public function getNrcs()
    {
        return $this->nrcs;
    }

    /**
     * Set typeAssemblee
     *
     * @param string $typeAssemblee
     *
     * @return Annonces_cloture
     */
    public function setTypeAssemblee($typeAssemblee)
    {
        $this->typeAssemblee = $typeAssemblee;

        return $this;
    }

    /**
     * Get typeAssemblee
     *
     * @return string
     */
    public function getTypeAssemblee()
    {
        return $this->typeAssemblee;
    }

    /**
     * Set dateAssemblee
     *
     * @param string $dateAssemblee
     *
     * @return Annonces_cloture
     */
    public function setDateAssemblee($dateAssemblee)
    {
        $this->dateAssemblee = $dateAssemblee;

        return $this;
    }

    /**
     * Get dateAssemblee
     *
     * @return string
     */
    public function getDateAssemblee()
    {
        return $this->dateAssemblee;
    }

    /**
     * Set dateEffet
     *
     * @param string $dateEffet
     *
     * @return Annonces_cloture
     */
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * Get dateEffet
     *
     * @return string
     */
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    /**
     * Set typeAssemble2
     *
     * @param string $typeAssemble2
     *
     * @return Annonces_cloture
     */
    public function setTypeAssemble2($typeAssemble2)
    {
        $this->typeAssemble2 = $typeAssemble2;

        return $this;
    }

    /**
     * Get typeAssemble2
     *
     * @return string
     */
    public function getTypeAssemble2()
    {
        return $this->typeAssemble2;
    }

    /**
     * Set liquidateur
     *
     * @param string $liquidateur
     *
     * @return Annonces_cloture
     */
    public function setLiquidateur($liquidateur)
    {
        $this->liquidateur = $liquidateur;

        return $this;
    }

    /**
     * Get liquidateur
     *
     * @return string
     */
    public function getLiquidateur()
    {
        return $this->liquidateur;
    }
    
    
    /**
     * Set typeannonce
     *
     * @param string $typeannonce
     *
     * @return Annonces_cloture
     */
    public function setTypeannonce($typeannonce)
    {
        $this->typeannonce = $typeannonce;

        return $this;
    }

    /**
     * Get typeannonce
     *
     * @return string
     */
    public function getTypeannonce()
    {
        return $this->typeannonce;
    }
    
    
    /**
     * Set publier_par
     *
     * @param string $publierpar
     *
     * @return Annonces_cloture
     */
    public function setPublierpar($publierpar)
    {
        $this->publierpar = $publierpar;

        return $this;
    }

    /**
     * Get publierpar
     *
     * @return string
     */
    public function getPublierpar()
    {
        return $this->publierpar;
    }
    
    /**
     * Set datepubilcation
     *
     * @param string $datepublication
     *
     * @return Annonces_cloture
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return string
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }
}

