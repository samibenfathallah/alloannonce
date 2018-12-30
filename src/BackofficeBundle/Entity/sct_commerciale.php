<?php

namespace BackofficeBundle\Entity;

/**
 * sct_commerciale
 */
class sct_commerciale
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
    private $cmplAdresse;

    /**
     * @var string
     */
    private $codePostale;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $villeGreffe;

    /**
     * @var string
     */
    private $nomSct;

    /**
     * @var string
     */
    private $formJuridique;

    /**
     * @var string
     */
    private $dateSignatureState;

    /**
     * @var string
     */
    private $sigle;

    /**
     * @var string
     */
    private $nomCommercial;

    /**
     * @var string
     */
    private $enseigne;

    /**
     * @var string
     */
    private $duree;

    /**
     * @var string
     */
    private $activitePrincipale;

	/**
     * @var string
     */
    private $capital;
	
	/**
     * @var integer
     */
	 
    private $gerant;
	
	/**
     * @var integer
     */
	 
    private $typegerant;
	
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
     * @return sct_commerciale
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
     * Set capital
     *
     * @param string $capital
     *
     * @return sct_commerciale
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
     * Set gerant
     *
     * @param integer $gerant
     *
     * @return sct_commerciale
     */
    public function setGerant($gerant)
    {
        $this->gerant = $gerant;

        return $this;
    }

    /**
     * Get typegerant
     *
     * @return int
     */
    public function getTypegerant()
    {
        return $this->typegerant;
    }
	/**
     * Set typegerant
     *
     * @param integer $typegerant
     *
     * @return sct_commerciale
     */
    public function setTypegerant($typegerant)
    {
        $this->typegerant = $typegerant;

        return $this;
    }

    /**
     * Get gerant
     *
     * @return int
     */
    public function getGerant()
    {
        return $this->gerant;
    }
    /**
     * Set cmplAdresse
     *
     * @param string $cmplAdresse
     *
     * @return sct_commerciale
     */
    public function setCmplAdresse($cmplAdresse)
    {
        $this->cmplAdresse = $cmplAdresse;

        return $this;
    }

    /**
     * Get cmplAdresse
     *
     * @return string
     */
    public function getCmplAdresse()
    {
        return $this->cmplAdresse;
    }

    /**
     * Set codePostale
     *
     * @param string $codePostale
     *
     * @return sct_commerciale
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return sct_commerciale
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
     * Set villeGreffe
     *
     * @param string $villeGreffe
     *
     * @return sct_commerciale
     */
    public function setVilleGreffe($villeGreffe)
    {
        $this->villeGreffe = $villeGreffe;

        return $this;
    }

    /**
     * Get villeGreffe
     *
     * @return string
     */
    public function getVilleGreffe()
    {
        return $this->villeGreffe;
    }

    /**
     * Set nomSct
     *
     * @param string $nomSct
     *
     * @return sct_commerciale
     */
    public function setNomSct($nomSct)
    {
        $this->nomSct = $nomSct;

        return $this;
    }

    /**
     * Get nomSct
     *
     * @return string
     */
    public function getNomSct()
    {
        return $this->nomSct;
    }

    /**
     * Set formJuridique
     *
     * @param string $formJuridique
     *
     * @return sct_commerciale
     */
    public function setFormJuridique($formJuridique)
    {
        $this->formJuridique = $formJuridique;

        return $this;
    }

    /**
     * Get formJuridique
     *
     * @return string
     */
    public function getFormJuridique()
    {
        return $this->formJuridique;
    }

    /**
     * Set dateSignatureState
     *
     * @param string $dateSignatureState
     *
     * @return sct_commerciale
     */
    public function setDateSignatureState($dateSignatureState)
    {
        $this->dateSignatureState = $dateSignatureState;

        return $this;
    }

    /**
     * Get dateSignatureState
     *
     * @return string
     */
    public function getDateSignatureState()
    {
        return $this->dateSignatureState;
    }

    /**
     * Set sigle
     *
     * @param string $sigle
     *
     * @return sct_commerciale
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return string
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set nomCommercial
     *
     * @param string $nomCommercial
     *
     * @return sct_commerciale
     */
    public function setNomCommercial($nomCommercial)
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    /**
     * Get nomCommercial
     *
     * @return string
     */
    public function getNomCommercial()
    {
        return $this->nomCommercial;
    }

    /**
     * Set enseigne
     *
     * @param string $enseigne
     *
     * @return sct_commerciale
     */
    public function setEnseigne($enseigne)
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Get enseigne
     *
     * @return string
     */
    public function getEnseigne()
    {
        return $this->enseigne;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return sct_commerciale
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set activitePrincipale
     *
     * @param string $activitePrincipale
     *
     * @return sct_commerciale
     */
    public function setActivitePrincipale($activitePrincipale)
    {
        $this->activitePrincipale = $activitePrincipale;

        return $this;
    }

    /**
     * Get activitePrincipale
     *
     * @return string
     */
    public function getActivitePrincipale()
    {
        return $this->activitePrincipale;
    }
}

