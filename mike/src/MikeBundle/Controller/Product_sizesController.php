<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MikeBundle\Entity\Sizes;
use MikeBundle\Entity\Products;
use Symfony\Component\HttpFoundation\Response;



class Product_sizesController extends Controller
{
    public function indexAction()
    {
//        $count_sizes = sizeof($sizes);

//        var_dump($products);die;

//        for($i=0; $i<$count_prod;$i++){
//            $repository = $this->getDoctrine()->getRepository('MikeBundle:Products');
//            $product = $repository->findOneBySku(100 + $i);
//
//            for ($j=0; $j<$count_sizes; $j++){
//                $repository = $this->getDoctrine()->getRepository('MikeBundle:Sizes');
//                $size = $repository->findOneById($j);
//
//                $product_sizes = new Products();
//                $product_sizes->addSizeId($size);
//                $product_sizes = new Sizes();
//                $product_sizes->addProductSku($product);
//            }
//        }



//
//        for($i=0; $i<$count_prod;$i++){
//            $repository = $this->getDoctrine()->getRepository('MikeBundle:Products');
//            $product = $repository->findOneBySku(100 + $i);
//
//            for ($j=0; $j<$count_sizes; $j++){
//
//                $repository = $this->getDoctrine()->getRepository('MikeBundle:Sizes');
//                $size = $repository->find($j);
//
//                $prod = new Products();
//                $prod->setSku($product['sku']);
//                $prod->setName($product['name']);
//                $prod->setImg($product['img']);
//                $prod->setPrice($product['price']);
//                $prod->setPaypal($product['paypal']);
//
//                $size2 = new Sizes();
//                $size2->setSize($size['size']);
//                $size2->setOrd($size['ord']);
//
//
//                $prod->addSizeId($size2);
//                $size2->addProductSku($prod);
//
////                $em->persist($prod);
////                $em->persist($size2);
//            }
//        }

        $em = $this->getDoctrine()->getManager();

        $products = $this->getDoctrine()->getRepository('MikeBundle:Products')->findAll();
        $sizes = $this->getDoctrine()->getRepository('MikeBundle:Sizes')->findAll();
        foreach ($products as $product){
            /** @var Products  $product */
            foreach ($sizes as $size){
                $product->addSizeId($size);
                /** @var Sizes  $size */
                $size->addProductSku($product);
            }
        }
        $em->flush();
        return new Response('Products and sizes added in the Product_sizes table.');
    }
}









