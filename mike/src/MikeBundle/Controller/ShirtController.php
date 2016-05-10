<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShirtController extends Controller
{
    public function shirtAction($id)
    {
//        $products = $this->getDoctrine()->getManager();
//        $query = $products->createQueryBuilder()
//            ->from('MikeBundle:Products', 'p')
//            ->select("p")
//            ->where('p.sku = :id')
//            ->setParameter('id', $id)
//            ->getQuery();
//        $product = $query->getResult();

        $repository = $this->getDoctrine()
            ->getRepository('MikeBundle:Products');
        $product = $repository->findOneBySku($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id ');}

        return $this->render('MikeBundle:shirts:shirt.html.twig',
            array("section"=>"shirts", "pageTitle" =>'', "product"=>$product));
    }
}
