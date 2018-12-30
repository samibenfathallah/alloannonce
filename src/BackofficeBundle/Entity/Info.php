<?php

namespace BackofficeBundle\Entity;

/**
 * Info
 */
class Info
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $bloc1;

    /**
     * @var string
     */
    private $titrebloc2;

    /**
     * @var string
     */
    private $bloc2;

    /**
     * @var string
     */
    private $tbloc3;

    /**
     * @var string
     */
    private $bloc3;

    /**
     * @var string
     */
    private $tbloc4;

    /**
     * @var string
     */
    private $bloc4;

    /**
     * @var string
     */
    private $tbloc5;

    /**
     * @var string
     */
    private $bloc5;

    /**
     * @var string
     */
    private $tbloc6l;

    /**
     * @var string
     */
    private $bloc6l;

    /**
     * @var string
     */
    private $tbloc6r;

    /**
     * @var string
     */
    private $bloc6r;

    /**
     * @var string
     */
    private $tbloc7;

    /**
     * @var string
     */
    private $bloc7;

    /**
     * @var string
     */
    private $tbloc8;

    /**
     * @var string
     */
    private $bloc8;

    /**
     * @var string
     */
    private $tbloc9;

    /**
     * @var string
     */
    private $bloc9;

    /**
     * @var float
     */
    private $prixligne;

    /**
     * @var int
     */
    private $nbrelettreligne;


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
     * Set email
     *
     * @param string $email
     *
     * @return Info
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Info
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Info
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
     * Set bloc1
     *
     * @param string $bloc1
     *
     * @return Info
     */
    public function setBloc1($bloc1)
    {
        $this->bloc1 = $bloc1;

        return $this;
    }

    /**
     * Get bloc1
     *
     * @return string
     */
    public function getBloc1()
    {
        return $this->bloc1;
    }

    /**
     * Set titrebloc2
     *
     * @param string $titrebloc2
     *
     * @return Info
     */
    public function setTitrebloc2($titrebloc2)
    {
        $this->titrebloc2 = $titrebloc2;

        return $this;
    }

    /**
     * Get titrebloc2
     *
     * @return string
     */
    public function getTitrebloc2()
    {
        return $this->titrebloc2;
    }

    /**
     * Set bloc2
     *
     * @param string $bloc2
     *
     * @return Info
     */
    public function setBloc2($bloc2)
    {
        $this->bloc2 = $bloc2;

        return $this;
    }

    /**
     * Get bloc2
     *
     * @return string
     */
    public function getBloc2()
    {
        return $this->bloc2;
    }

    /**
     * Set tbloc3
     *
     * @param string $tbloc3
     *
     * @return Info
     */
    public function setTbloc3($tbloc3)
    {
        $this->tbloc3 = $tbloc3;

        return $this;
    }

    /**
     * Get tbloc3
     *
     * @return string
     */
    public function getTbloc3()
    {
        return $this->tbloc3;
    }

    /**
     * Set bloc3
     *
     * @param string $bloc3
     *
     * @return Info
     */
    public function setBloc3($bloc3)
    {
        $this->bloc3 = $bloc3;

        return $this;
    }

    /**
     * Get bloc3
     *
     * @return string
     */
    public function getBloc3()
    {
        return $this->bloc3;
    }

    /**
     * Set tbloc4
     *
     * @param string $tbloc4
     *
     * @return Info
     */
    public function setTbloc4($tbloc4)
    {
        $this->tbloc4 = $tbloc4;

        return $this;
    }

    /**
     * Get tbloc4
     *
     * @return string
     */
    public function getTbloc4()
    {
        return $this->tbloc4;
    }

    /**
     * Set bloc4
     *
     * @param string $bloc4
     *
     * @return Info
     */
    public function setBloc4($bloc4)
    {
        $this->bloc4 = $bloc4;

        return $this;
    }

    /**
     * Get bloc4
     *
     * @return string
     */
    public function getBloc4()
    {
        return $this->bloc4;
    }

    /**
     * Set tbloc5
     *
     * @param string $tbloc5
     *
     * @return Info
     */
    public function setTbloc5($tbloc5)
    {
        $this->tbloc5 = $tbloc5;

        return $this;
    }

    /**
     * Get tbloc5
     *
     * @return string
     */
    public function getTbloc5()
    {
        return $this->tbloc5;
    }

    /**
     * Set bloc5
     *
     * @param string $bloc5
     *
     * @return Info
     */
    public function setBloc5($bloc5)
    {
        $this->bloc5 = $bloc5;

        return $this;
    }

    /**
     * Get bloc5
     *
     * @return string
     */
    public function getBloc5()
    {
        return $this->bloc5;
    }

    /**
     * Set tbloc6l
     *
     * @param string $tbloc6l
     *
     * @return Info
     */
    public function setTbloc6l($tbloc6l)
    {
        $this->tbloc6l = $tbloc6l;

        return $this;
    }

    /**
     * Get tbloc6l
     *
     * @return string
     */
    public function getTbloc6l()
    {
        return $this->tbloc6l;
    }

    /**
     * Set bloc6l
     *
     * @param string $bloc6l
     *
     * @return Info
     */
    public function setBloc6l($bloc6l)
    {
        $this->bloc6l = $bloc6l;

        return $this;
    }

    /**
     * Get bloc6l
     *
     * @return string
     */
    public function getBloc6l()
    {
        return $this->bloc6l;
    }

    /**
     * Set tbloc6r
     *
     * @param string $tbloc6r
     *
     * @return Info
     */
    public function setTbloc6r($tbloc6r)
    {
        $this->tbloc6r = $tbloc6r;

        return $this;
    }

    /**
     * Get tbloc6r
     *
     * @return string
     */
    public function getTbloc6r()
    {
        return $this->tbloc6r;
    }

    /**
     * Set bloc6r
     *
     * @param string $bloc6r
     *
     * @return Info
     */
    public function setBloc6r($bloc6r)
    {
        $this->bloc6r = $bloc6r;

        return $this;
    }

    /**
     * Get bloc6r
     *
     * @return string
     */
    public function getBloc6r()
    {
        return $this->bloc6r;
    }

    /**
     * Set tbloc7
     *
     * @param string $tbloc7
     *
     * @return Info
     */
    public function setTbloc7($tbloc7)
    {
        $this->tbloc7 = $tbloc7;

        return $this;
    }

    /**
     * Get tbloc7
     *
     * @return string
     */
    public function getTbloc7()
    {
        return $this->tbloc7;
    }

    /**
     * Set bloc7
     *
     * @param string $bloc7
     *
     * @return Info
     */
    public function setBloc7($bloc7)
    {
        $this->bloc7 = $bloc7;

        return $this;
    }

    /**
     * Get bloc7
     *
     * @return string
     */
    public function getBloc7()
    {
        return $this->bloc7;
    }

    /**
     * Set tbloc8
     *
     * @param string $tbloc8
     *
     * @return Info
     */
    public function setTbloc8($tbloc8)
    {
        $this->tbloc8 = $tbloc8;

        return $this;
    }

    /**
     * Get tbloc8
     *
     * @return string
     */
    public function getTbloc8()
    {
        return $this->tbloc8;
    }

    /**
     * Set bloc8
     *
     * @param string $bloc8
     *
     * @return Info
     */
    public function setBloc8($bloc8)
    {
        $this->bloc8 = $bloc8;

        return $this;
    }

    /**
     * Get bloc8
     *
     * @return string
     */
    public function getBloc8()
    {
        return $this->bloc8;
    }

    /**
     * Set tbloc9
     *
     * @param string $tbloc9
     *
     * @return Info
     */
    public function setTbloc9($tbloc9)
    {
        $this->tbloc9 = $tbloc9;

        return $this;
    }

    /**
     * Get tbloc9
     *
     * @return string
     */
    public function getTbloc9()
    {
        return $this->tbloc9;
    }

    /**
     * Set bloc9
     *
     * @param string $bloc9
     *
     * @return Info
     */
    public function setBloc9($bloc9)
    {
        $this->bloc9 = $bloc9;

        return $this;
    }

    /**
     * Get bloc9
     *
     * @return string
     */
    public function getBloc9()
    {
        return $this->bloc9;
    }

    /**
     * Set prixligne
     *
     * @param float $prixligne
     *
     * @return Info
     */
    public function setPrixligne($prixligne)
    {
        $this->prixligne = $prixligne;

        return $this;
    }

    /**
     * Get prixligne
     *
     * @return float
     */
    public function getPrixligne()
    {
        return $this->prixligne;
    }

    /**
     * Set nbrelettreligne
     *
     * @param integer $nbrelettreligne
     *
     * @return Info
     */
    public function setNbrelettreligne($nbrelettreligne)
    {
        $this->nbrelettreligne = $nbrelettreligne;

        return $this;
    }

    /**
     * Get nbrelettreligne
     *
     * @return int
     */
    public function getNbrelettreligne()
    {
        return $this->nbrelettreligne;
    }
}

