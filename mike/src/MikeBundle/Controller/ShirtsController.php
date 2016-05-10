<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShirtsController extends Controller{

    public function getAction($page) {
//get number of products
        $prod = $this->getDoctrine()->getRepository('MikeBundle:Products')->findAll();
        $total_products = sizeof($prod);

        $products_per_page = 8;
        $total_pages = ceil($total_products / $products_per_page);

        $current_page = intval($page);

        $start = (($current_page - 1) * $products_per_page);

            $products = $this->getDoctrine()->getManager();
            $query = $products->createQueryBuilder()
                ->from('MikeBundle:Products', 'p')
                ->select("p")
                ->setMaxResults($products_per_page)
                ->setFirstResult($start)
                ->getQuery();
            $products = $query->getResult();

        if (!$products) {
            throw $this->createNotFoundException('No product found for id ');}

        return $this->render('MikeBundle:shirts:shirts.html.twig',
            array("products"=>$products,
                "current_page"=>$current_page,
                "total_pg"=>$total_pages));

    }

}

//