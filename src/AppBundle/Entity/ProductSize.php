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


    /**
     * @return Product
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param Product $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }



}