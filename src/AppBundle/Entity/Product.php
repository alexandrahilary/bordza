<?php


namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Tests\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product extends Model
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
     * @var CategoryProduct
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CategoryProduct", inversedBy="products")
     * @ORM\JoinColumn(name="category_product_id", referencedColumnName="id")
     */
    private $category_product_id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="text")
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="shape", type="text")
     */
    private $shape;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var ProductSize
     * @ORM\OneToMany(targetEntity=\AppBundle\Entity\ProductSize::class, cascade= {"persist", "remove"}, mappedBy="product_id")
     * @ORM\JoinColumn(name="product_id")
     */
    private $sizes;

    public function __construct()
    {
        $this->sizes = new ArrayCollection();
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * @param string $shape
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return CategoryProduct
     */
    public function getCategoryProductId()
    {
        return $this->category_product_id;
    }

    /**
     * @param CategoryProduct $category_product_id
     */
    public function setCategoryProductId($category_product_id)
    {
        $this->category_product_id = $category_product_id;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }











}