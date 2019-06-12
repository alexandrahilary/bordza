<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Session;
use AppBundle\Entity\User;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InscriptionRepository")
 */
class Inscription
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
     * @var \AppBundle\Entity\Session
     *
     * @ORM\ManyToOne(targetEntity=\AppBundle\Entity\Session::class, inversedBy="inscriptionCollection")
     * @ORM\JoinColumn(name="sessionid", referencedColumnName="id")
     */
    private $sessionId;

    /**
     * @var \AppBundle\Entity\Formule
     *
     * @ORM\ManyToOne(targetEntity=\AppBundle\Entity\Formule::class)
     * @ORM\JoinColumn(name="formule", referencedColumnName="id")
     */
    private $formule;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity=\AppBundle\Entity\User::class, inversedBy="inscriptions")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var bool
     *
     * @ORM\Column(name="planche", type="boolean")
     */
    private $planche;

    /**
     * @var bool
     *
     * @ORM\Column(name="materiel", type="boolean")
     */
    private $materiel;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    /**
     * @var bool
     *
     * @ORM\Column(name="forfait1h", type="boolean")
     */
    private $forfait1h;

    /**
     * @var bool
     *
     * @ORM\Column(name="forfait5h", type="boolean")
     */
    private $forfait5h;

    /**
     * @var bool
     *
     * @ORM\Column(name="forfait10h", type="boolean")
     */
    private $forfait10h;

    /**
     * @var bool
     *
     * @ORM\Column(name="forfaitAnnuel", type="boolean")
     */
    private $forfaitAnnuel;

    public function __construct()
    {
        
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
     * Set sessionId
     *
     * @param \AppBundle\Entity\Session $sessionId
     *
     * @return Inscription
     */
    public function setSessionId(Session $sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * Get sessionId
     * 
     *
     * @return \AppBundle\Entity\Session
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

     /**
     * Set formule
     *
     * @param \AppBundle\Entity\Formule $formule
     *
     * @return Inscription
     */
    public function setFormule(Formule $formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \AppBundle\Entity\Formule
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set userId
     *
     * @param \AppBundle\Entity\User $userId
     *
     * @return Inscription
     */
    public function setUserId(User $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Inscription
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Inscription
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
     * Set age
     *
     * @param string $age
     *
     * @return Inscription
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Inscription
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
     * Set valide
     *
     * @param boolean $valide
     *
     * @return Inscription
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return bool
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set planche
     *
     * @param boolean $planche
     *
     * @return Inscription
     */
    public function setPlanche($planche)
    {
        $this->planche = $planche;

        return $this;
    }

    /**
     * Get planche
     *
     * @return bool
     */
    public function getPlanche()
    {
        return $this->planche;
    }

    /**
     * Set materiel
     *
     * @param boolean $materiel
     *
     * @return Inscription
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get materiel
     *
     * @return bool
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set forfait1h
     *
     * @param boolean $forfait1h
     *
     * @return Inscription
     */
    public function setForfait1h($forfait1h)
    {
        $this->forfait1h = $forfait1h;

        return $this;
    }

    /**
     * Get forfait1h
     *
     * @return bool
     */
    public function getForfait1h()
    {
        return $this->forfait1h;
    }

    /**
     * Set forfait2h
     *
     * @param boolean $forfait5h
     *
     * @return Inscription
     */
    public function setForfait5h($forfait5h)
    {
        $this->forfait5h = $forfait5h;

        return $this;
    }

    /**
     * Get forfait5h
     *
     * @return bool
     */
    public function getForfait5h()
    {
        return $this->forfait5h;
    }

    /**
     * Set forfait10h
     *
     * @param boolean $forfait10h
     *
     * @return Inscription
     */
    public function setForfait10h($forfait10h)
    {
        $this->forfait10h = $forfait10h;

        return $this;
    }

    /**
     * Get forfait10h
     *
     * @return bool
     */
    public function getForfait10h()
    {
        return $this->forfait10h;
    }

    /**
     * Set forfaitAnnuel
     *
     * @param boolean $forfaitAnnuel
     *
     * @return Inscription
     */
    public function setForfaitAnnuel($forfaitAnnuel)
    {
        $this->forfaitAnnuel = $forfaitAnnuel;

        return $this;
    }

    /**
     * Get forfaitAnnuel
     *
     * @return bool
     */
    public function getForfaitAnnuel()
    {
        return $this->forfaitAnnuel;
    }

    

    public function __toString()
    {
        $format = "Inscription : Compte Utilisateur : %s, Session : %s, Nom de lélève : %s, Prénom de l'élève : %s, Age: %s, Numéro de téléphone : %s, Status de la réservation : %s";
        return sprintf($format, $this->userId, $this->sessionId, $this->nom, $this->prenom, $this->age, $this->tel, $this->valide);
    }

    

}

