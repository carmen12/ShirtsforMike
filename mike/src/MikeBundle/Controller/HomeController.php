<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
//    public function indexAction()
//    {
//        return $this->render('MikeBundle::index.html.twig',
//            array("section"=>"home",
//                "pageTitle" =>"Unique T-shirts designed by a frog"));
//    }

    public function indexAction(){

        $products = $this->getDoctrine()->getManager();
        $query = $products->createQueryBuilder()
            ->from('MikeBundle:Products', 'p')
            ->select("p")
            ->setMaxResults(4)
            ->orderBy('p.sku','DESC')
            ->getQuery();
            $products = $query->getResult();

        if (!$products) {
            throw $this->createNotFoundException(
                'Can not connect to database');}


        return $this->render('MikeBundle:homepage:index.html.twig',
            array("products"=>$products));
    }

}
