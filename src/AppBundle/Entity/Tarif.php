<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="tarif")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TarifRepository")
 */
class Tarif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="une_heure", type="string", length=255)
     */
    private $uneHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="cinq_heures", type="string", length=255)
     */
    private $cinqHeures;

    /**
     * @var string
     *
     * @ORM\Column(name="dix_heures", type="string", length=255)
     */
    private $dixHeures;

    /**
     * @var string
     *
     * @ORM\Column(name="trimestre", type="string", length=255)
     */
    private $trimestre;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;


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
     * Set uneHeure
     *
     * @param string $uneHeure
     *
     * @return Tarif
     */
    public function setUneHeure($uneHeure)
    {
        $this->uneHeure = $uneHeure;

        return $this;
    }

    /**
     * Get uneHeure
     *
     * @return string
     */
    public function getUneHeure()
    {
        return $this->uneHeure;
    }

    /**
     * Set cinqHeures
     *
     * @param string $cinqHeures
     *
     * @return Tarif
     */
    public function setCinqHeures($cinqHeures)
    {
        $this->cinqHeures = $cinqHeures;

        return $this;
    }

    /**
     * Get cinqHeures
     *
     * @return string
     */
    public function getCinqHeures()
    {
        return $this->cinqHeures;
    }

    /**
     * Set dixHeures
     *
     * @param string $dixHeures
     *
     * @return Tarif
     */
    public function setDixHeures($dixHeures)
    {
        $this->dixHeures = $dixHeures;

        return $this;
    }

    /**
     * Get dixHeures
     *
     * @return string
     */
    public function getDixHeures()
    {
        return $this->dixHeures;
    }

    /**
     * Set trimestre
     *
     * @param string $trimestre
     *
     * @return Tarif
     */
    public function setTrimestre($trimestre)
    {
        $this->trimestre = $trimestre;

        return $this;
    }

    /**
     * Get trimestre
     *
     * @return string
     */
    public function getTrimestre()
    {
        return $this->trimestre;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Tarif
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}

