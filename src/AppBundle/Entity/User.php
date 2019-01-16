<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use AppBundle\Entity\Inscription;

/**
 * User
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends FosUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var \AppBundle\Entity\Inscription
     * @ORM\OneToMany(targetEntity=\AppBundle\Entity\Inscription::class, cascade= {"persist", "remove"}, mappedBy="userId")
     * 
     */
    private $inscriptions;

    public function __construct()
    {
        parent::__construct();
        $this->inscriptions = new ArrayCollection();
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
     * Set inscriptions
     *
     * @param \AppBundle\Entity\Inscription $inscriptions
     *
     * @return User
     */
    public function setInscriptions()
    {
        return $this->inscriptions;
    }

    /**
     * Get inscriptions
     *
     * @return ArrayCollection
     */
    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    /**
     * @param \AppBundle\Entity\Inscription $inscriptions
     */
    public function addInscription(Inscription $inscription)
    {
        $this->inscriptions->add($inscription);
        $inscription->setInscriptions($this);
    }
    /**
     * @param \AppBundle\Entity\Session $session
     */
    public function removeIscription(Inscription $inscription)
    {
        $this->inscriptions->removeElement($inscription);
    }

    
}

