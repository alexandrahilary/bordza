<?php


namespace AppBundle\Entity;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Doctrine\ORM\Mapping as ORM;
class ProductSize extends Entity
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
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product", inversedBy="sizes")
     * @ORM\JoinColumn(name="sizes", referencedColumnName="id")
     */
    private $product_id;

    /**
     * @var float
     * @ORM\Column(name="width", type="float")
     */
    private $width;

    /**
     * @var float
     * @ORM\Column(name="height",type="float")
     */
    private $height;

    /**
     * @var string
     * @ORM\Column(name="title",type="text")
     */
    private $title;

}