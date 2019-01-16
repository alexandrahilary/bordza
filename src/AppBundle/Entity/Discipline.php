<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Session;

/**
 * Discipline
 *
 * @ORM\Table(name="discipline")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DisciplineRepository")
 */
class Discipline
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
     * @ORM\Column(name="nom_discipline", type="string", length=255)
     */
    private $nomDiscipline;

    /**
     * @var \AppBundle\Entity\Session
     * @ORM\OneToMany(targetEntity=\AppBundle\Entity\Session::class, cascade= {"persist", "remove"}, mappedBy="disciplines")
     * @ORM\JoinColumn(name="disciplines")
     */
    private $sessions;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
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
     * Set nomDiscipline
     *
     * @param string $nomDiscipline
     *
     * @return Discipline
     */
    public function setNomDiscipline($nomDiscipline)
    {
        $this->nomDiscipline = $nomDiscipline;

        return $this;
    }

    /**
     * Get nomDiscipline
     *
     * @return string
     */
    public function getNomDiscipline()
    {
        return $this->nomDiscipline;
    }

    /**
     * Set sessions
     *
     * @param \AppBundle\Entity\Session $sessions
     *
     * @return Discipline
     */
    public function setSessions(Session $sessions)
    {
        $this->sessions = $sessions;

        return $this;
    }

    /**
     * Get sessions
     *
     * @return ArrayCollection
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    public function __toString()
    {
        $format = "%s"./*Sessions : %s*/"";
    return sprintf($format, $this->nomDiscipline/*, $this->sessions*/);
    }
}


