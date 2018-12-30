<?php

namespace BackofficeBundle\Entity;

/**
 * gerant
 */
class gerant
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $civilite;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;

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
    private $residenceEtranger;


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
     * Set civilite
     *
     * @param string $civilite
     *
     * @return gerant
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return gerant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return gerant
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return gerant
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
     * @return gerant
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
     * @return gerant
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
     * @return gerant
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
     * Set residenceEtranger
     *
     * @param string $residenceEtranger
     *
     * @return gerant
     */
    public function setResidenceEtranger($residenceEtranger)
    {
        $this->residenceEtranger = $residenceEtranger;

        return $this;
    }

    /**
     * Get residenceEtranger
     *
     * @return string
     */
    public function getResidenceEtranger()
    {
        return $this->residenceEtranger;
    }
}

