<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Discipline;
use AppBundle\Entity\Formule;
use AppBundle\Entity\Inscription;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SessionRepository")
 */
class Session
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
     * @var \AppBundle\Entity\Formule
     *
     * @ORM\ManyToOne(targetEntity="Formule", inversedBy="sessions")
     * @ORM\JoinColumn(name="formules", referencedColumnName="id")
     */
    private $formules;

    /**
     * @var \AppBundle\Entity\Discipline
     *
     * @ORM\ManyToOne(targetEntity="Discipline", inversedBy="sessions")
     * @ORM\JoinColumn(name="disciplines", referencedColumnName="id")
     */
    private $disciplines;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_session", type="string", length=255)
     */
    private $titreSession;

    /**
     * @var string
     *
     * @ORM\Column(name="date_session", type="string", length=255)
     */
    private $dateSession;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_place", type="integer")
     */
    private $nbPlace;

    /**
     * @var \AppBundle\Entity\Inscription
     *
     * @ORM\OneToMany(targetEntity=\AppBundle\Entity\Inscription::class, cascade= {"persist", "remove"}, mappedBy="sessionId")
     */
    private $inscriptionCollection;

    /**
     * @var string
     *
     * @ORM\Column(name="description_session", type="text")
     */
    private $descriptionSession;

    /**
     * @var \AppBundle\Entity\Image
     * 
     * @ORM\OneToOne(targetEntity=\AppBundle\Entity\Image::class, cascade= {"persist", "remove"})
     * @ORM\JoinColumn(name="image", referencedColumnName="id")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255, nullable=true)
     */
    private $prix;

    public function __construct()
    {
        $this->inscriptionCollection = new ArrayCollection();
        
    }

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
     * Set formules
     *
     * @param integer $formules
     *
     * @return Session
     */
    public function setFormules($formules)
    {
        $this->formules = $formules;

        return $this;
    }

    /**
     * Get formules
     *
     * @return int
     */
    public function getFormules()
    {
        return $this->formules;
    }

    /**
     * Set disciplines
     *
     * @param integer $disciplines
     *
     * @return Session
     */
    public function setDisciplines($disciplines)
    {
        $this->disciplines = $disciplines;

        return $this;
    }

    /**
     * Get disciplines
     *
     * @return int
     */
    public function getDisciplines()
    {
        return $this->disciplines;
    }

    /**
     * Set titreSession
     *
     * @param string $titreSession
     *
     * @return Session
     */
    public function setTitreSession($titreSession)
    {
        $this->titreSession = $titreSession;

        return $this;
    }

    /**
     * Get titreSession
     *
     * @return string
     */
    public function getTitreSession()
    {
        return $this->titreSession;
    }

    /**
     * Set dateSession
     *
     * @param string $dateSession
     *
     * @return Session
     */
    public function setDateSession($dateSession)
    {
        $this->dateSession = $dateSession;

        return $this;
    }

    /**
     * Get dateSession
     *
     * @return string
     */
    public function getDateSession()
    {
        return $this->dateSession;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return Session
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set inscriptionCollection
     *
     * @param \AppBundle\Entity\Inscription $inscriptionCollection
     *
     * @return Session
     */
    public function setInscriptionCollection()
    {

        return $this;
    }

    /**
     * Get inscriptionCollection
     *
     * @return ArrayCollection
     */
    public function getInscriptionCollection()
    {
        return $this->inscriptionCollection;
    }

    /**
     * @param \AppBundle\Entity\Inscription $inscription
     */
    public function addInscription(Inscription $inscriptionCollection)
    {
        $this->inscriptionCollection->add($inscriptionCollection);
        $inscriptionCollection->setSession($this);
    }
    /**
     * @param \AppBundle\Entity\Inscription $inscription
     */
    public function removeInscription(Inscription $inscriptionCollection)
    {
        $this->inscriptionCollection->removeElement($inscriptionCollection);
    }

    /**
     * Set descriptionSession
     *
     * @param string $descriptionSession
     *
     * @return Session
     */
    public function setDescriptionSession($descriptionSession)
    {
        $this->descriptionSession = $descriptionSession;

        return $this;
    }

    /**
     * Get descriptionSession
     *
     * @return string
     */
    public function getDescriptionSession()
    {
        return $this->descriptionSession;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Session
     */
    public function setImage(Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Session
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    public function __toString()
    {
        $format = "%s, %s, %s, %s, %s";
        return sprintf($format, $this->formules, $this->disciplines, $this->dateSession, $this->titreSession, $this->prix);
    }
}

