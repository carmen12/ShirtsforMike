<?php

namespace MikeBundle\Controller;
use MikeBundle\Entity\Sizes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AddSizesController extends Controller
{

 public function createsizesAction()
{
    $em = $this->getDoctrine()->getManager();

    $size1 = new Sizes();
    $size1->setSize('Small');
    $size1->setOrd(10);
//    $size1->setProductId();

    $size2 = new Sizes();
    $size2->setSize('Medium');
    $size2->setOrd(20);

    $size3 = new Sizes();
    $size3->setSize('Large');
    $size3->setOrd(30);

    $size4 = new Sizes();
    $size4->setSize('X-Large');
    $size4->setOrd(40);

    $em->persist($size1);
    $em->persist($size2);
    $em->persist($size3);
    $em->persist($size4);

    $em->flush();

    return new Response('Saved new product ');
}
}
