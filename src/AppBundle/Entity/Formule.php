<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use AppBundle\Entity\Session;

/**
 * Formule
 *
 * @ORM\Table(name="formule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormuleRepository")
 */
class Formule
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
     * @ORM\Column(name="nom_formule", type="string", length=255)
     */
    private $nomFormule;

    /**
     * @var \AppBundle\Entity\Session
     * @ORM\OneToMany(targetEntity=\AppBundle\Entity\Session::class, cascade= {"persist", "remove"}, mappedBy="formules")
     * 
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
     * Set nomFormule
     *
     * @param string $nomFormule
     *
     * @return Formule
     */
    public function setNomFormule($nomFormule)
    {
        $this->nomFormule = $nomFormule;

        return $this;
    }

    /**
     * Get nomFormule
     *
     * @return string
     */
    public function getNomFormule()
    {
        return $this->nomFormule;
    }

    /**
     * Set sessions
     *
     * @param \AppBundle\Entity\Session $session
     *
     * @return Formule
     */
    public function setSessions()
    {
        return $this->sessions;
    }

    /**
     * Get sessions
     * 
     *
     * @return ArrayCollection
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    

    /**
     * @param \AppBundle\Entity\Session $session
     */
    public function addSession(Session $session)
    {
        $this->sessions->add($session);
        $session->setFormules($this);
    }
    /**
     * @param \AppBundle\Entity\Session $session
     */
    public function removeSession(Session $session)
    {
        $this->sessions->removeElement($session);
    }

    public function __toString()
    {
        $format = "%s"./*Sessions : %s*/"";
    return sprintf($format, $this->nomFormule/*, $this->sessions*/);
    }
    
}

