<?php

namespace MikeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sizes
 *
 * @ORM\Table(name="sizes")
 * @ORM\Entity(repositoryClass="MikeBundle\Repository\SizesRepository")
 */
class Sizes
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
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var int
     *
     * @ORM\Column(name="ord", type="integer")
     */
    private $ord;

    /**
     * @ORM\ManyToMany(targetEntity="Products", mappedBy="size_id")
     */
    private $product_sku;

    public function __construct() {
        $this->product_sku = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set size
     *
     * @param string $size
     *
     * @return Sizes
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     *
     * @return Sizes
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return int
     */
    public function getOrd()
    {
        return $this->ord;
    }



    /**
     * Add productSku
     *
     * @param \MikeBundle\Entity\Products $productSku
     *
     * @return Sizes
     */
    public function addProductSku(\MikeBundle\Entity\Products $productSku)
    {
        $this->product_sku[] = $productSku;

        return $this;
    }

    /**
     * Remove productSku
     *
     * @param \MikeBundle\Entity\Products $productSku
     */
    public function removeProductSku(\MikeBundle\Entity\Products $productSku)
    {
        $this->product_sku->removeElement($productSku);
    }

    /**
     * Get productSku
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductSku()
    {
        return $this->product_sku;
    }

    /**
     *@return string String representation of this class
     */

    public function __toString()
    {
        return $this->size;
    }


}
