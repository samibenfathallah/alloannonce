<?php

namespace BackofficeBundle\Entity;

/**
 * Societe
 */
class Societe
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $formJuridique;

    /**
     * @var string
     */
    private $capitale;

    /**
     * @var string
     */
    private $nrcs;

    /**
     * @var string
     */
    private $represenatant;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Societe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set formJuridique
     *
     * @param string $formJuridique
     *
     * @return Societe
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
     * Set capitale
     *
     * @param string $capitale
     *
     * @return Societe
     */
    public function setCapitale($capitale)
    {
        $this->capitale = $capitale;

        return $this;
    }

    /**
     * Get capitale
     *
     * @return string
     */
    public function getCapitale()
    {
        return $this->capitale;
    }

    /**
     * Set nrcs
     *
     * @param string $nrcs
     *
     * @return Societe
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
     * Set represenatant
     *
     * @param string $represenatant
     *
     * @return Societe
     */
    public function setRepresenatant($represenatant)
    {
        $this->represenatant = $represenatant;

        return $this;
    }

    /**
     * Get represenatant
     *
     * @return string
     */
    public function getRepresenatant()
    {
        return $this->represenatant;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
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
     * Set cmplAdresse
     *
     * @param string $cmplAdresse
     *
     * @return Societe
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
     * @return Societe
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
     * @return Societe
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
     * @return Societe
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
}

