<?php

namespace MikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="MikeBundle\Repository\ProductsRepository")
 */
class Products
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
     * @var int
     *
     * @ORM\Column(name="sku", type="integer")
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal", type="string", length=255)
     */
    private $paypal;

    /**
     * @ORM\ManyToMany(targetEntity="Sizes", inversedBy="product_sku")
     * @ORM\JoinTable(name="product_sizes")
     * @ORM\OrderBy({"ord" = "ASC"})
     */
    private $size_id;

    public function __construct() {
        $this->size_id = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set sku
     *
     * @param integer $sku
     *
     * @return Products
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return int
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Products
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set paypal
     *
     * @param string $paypal
     *
     * @return Products
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get paypal
     *
     * @return string
     */
    public function getPaypal()
    {
        return $this->paypal;
    }


    /**
     * Add sizeId
     *
     * @param \MikeBundle\Entity\Sizes $sizeId
     *
     * @return Products
     */
    public function addSizeId(\MikeBundle\Entity\Sizes $sizeId)
    {
        $this->size_id[] = $sizeId;

        return $this;
    }

    /**
     * Remove sizeId
     *
     * @param \MikeBundle\Entity\Sizes $sizeId
     */
    public function removeSizeId(\MikeBundle\Entity\Sizes $sizeId)
    {
        $this->size_id->removeElement($sizeId);
    }

    /**
     * Get sizeId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSizeId()
    {
        return $this->size_id;
    }

    /**
     *@return string String representation of this class
     */

    public function __toString()
    {
        return $this->name;
    }

}
